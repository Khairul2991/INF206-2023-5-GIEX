<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PulsaController extends Controller
{
    public function store(Request $request,User $id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        // dd($user);
        if ($user->total_tiket > 2) {
            if ($user->penukaran_pulsa==null) {
                $user->penukaran_pulsa = 1;
            } else {
                $user->penukaran_pulsa =  $user->penukaran_pulsa+1;
            }
            $user->total_tiket = $user->total_tiket-3;
            $user->update();
            Alert::success('Penukaran Berhasil', 'Mohon menunggu');
            return redirect('dashboard');
        }
        Alert::error('Gagal', 'Total Tiket tidak mencukupi!');
        return back();
    }
}
