<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Meeting;
use App\MeetingUser;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class UserPresence extends Controller
{
    public function scanQr(Request $request)
    {
        $scanned_qr = $request->check;
        $meeting = Meeting::where('qrcode', $scanned_qr)->first();
        $participant = User::where('id', auth()->user()->id)->first();
        if ($meeting) {
            $timeLimit = Carbon::parse($meeting->end_presence);
            $current_time = Carbon::now();
            $participant_check = MeetingUser::where('meeting_id', $meeting->id)->where('user_id', $participant->id)->first();
            if (!$participant_check) {
                Alert::error('Gagal!', 'Anda tidak terdaftar dalam pertemuan ini');
                return redirect()->back()->with('error', 'Anda tidak terdaftar dalam pertemuan ini');
            } else if ($participant_check->status == 'Hadir') {
                Alert::warning('Peringatan!', 'Anda sudah melakukan absensi');
                return redirect()->back()->with('warning', 'Anda sudah melakukan absensi');
            } else if ($current_time->greaterThan($timeLimit)) {
                Alert::warning('Peringatan!', 'Pertemuan sudah berakhir');
                return redirect()->back()->with('warning', 'Pertemuan sudah berakhir');
            } else {
                MeetingUser::where('meeting_id', $meeting->id)->where('user_id', $participant->id)->update([
                    'status' => 'Hadir'
                ]);
                Alert::success('Berhasil!', 'Presensi berhasil');
                return redirect()->back()->with('status', 'Presensi berhasil');
            }
        } else {
            return redirect()->back()->with('warning', 'Pertemuan tidak ditemukan');
        }
    }
}
