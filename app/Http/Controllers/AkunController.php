<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AkunController extends Controller
{
    public function index()
    {
        $no_tabungan = Nasabah::where('user_id', Auth::id())->pluck('no_tabungan')->first();
        $saldoResponse = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/$no_tabungan");

        if ($saldoResponse->successful()) {
            $saldo = $saldoResponse->json();
            $norek = $no_tabungan;

            if (!is_array($saldo)) {
                $error_message = 'Invalid saldo';
                return view('error', compact('error_message'));
            }
        } else {
            $error_message = 'Error getting saldo: ' . $saldoResponse->status() . ' ' . $saldoResponse->body();
            return view('error', compact('error_message'));
        }

        return view('akun.profile', compact('saldo', 'norek'));
    }
}
