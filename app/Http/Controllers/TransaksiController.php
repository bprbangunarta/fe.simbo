<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TransaksiController extends Controller
{
    public function index()
    {
        $no_tabungan = Nasabah::where('user_id', Auth::id())->pluck('no_tabungan')->first();
        $response = Http::get("https://api.bprbangunarta.co.id/api/v1/transaksi/$no_tabungan");

        if ($response->successful()) {
            $transaksi = $response->json();
            $norek = $no_tabungan;

            if (is_array($transaksi)) {
                return view('transaksi.list', compact('transaksi', 'norek'));
            } else {
                $error_message = 'Invalid';
                return view('error', compact('error_message'));
            }
        } else {
            $error_message = $response->status() . ' ' . $response->body();
            return view('error', compact('error_message'));
        }
    }

    public function show($id, $param)
    {
        $no_tabungan = Nasabah::where('user_id', Auth::id())->pluck('no_tabungan')->first();
        $response = Http::get("https://api.bprbangunarta.co.id/api/v1/transaksi/$id/$param");

        if ($response->successful()) {
            $transaksi = $response->json();
            $norek = $no_tabungan;

            if (is_array($transaksi)) {
                // dd($transaksi);
                return view('transaksi.detail', compact('transaksi', 'norek'));
            } else {
                $error_message = 'Invalid';
                return view('error', compact('error_message'));
            }
        } else {
            $error_message = $response->status() . ' ' . $response->body();
            return view('error', compact('error_message'));
        }
    }
}
