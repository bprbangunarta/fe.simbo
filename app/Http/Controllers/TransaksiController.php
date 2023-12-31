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
        return view('transaksi.index');
    }

    public function mutasi()
    {
        $no_tabungan = Nasabah::where('user_id', Auth::id())->pluck('no_tabungan')->first();
        $response = Http::get("https://api.bprbangunarta.co.id/api/v1/transaksi/lastmonth/$no_tabungan");

        if ($response->successful()) {
            $transaksi = $response->json();
            $norek = $no_tabungan;

            if (is_array($transaksi)) {
                return view('transaksi.mutasi', compact('transaksi', 'norek'));
            } else {
                $error_message = 'Invalid';
                return view('error', compact('error_message'));
            }
        } else {
            $error_message = $response->status() . ' ' . $response->body();
            return view('error', compact('error_message'));
        }
    }

    public function show_mutasi($id, $param)
    {
        $no_tabungan = Nasabah::where('user_id', Auth::id())->pluck('no_tabungan')->first();
        $response = Http::get("https://api.bprbangunarta.co.id/api/v1/transaksi/$id/$param");

        if ($response->successful()) {
            $transaksi = $response->json();
            $norek = $no_tabungan;

            if (is_array($transaksi)) {
                // dd($transaksi);
                return view('transaksi.mutasi-detail', compact('transaksi', 'norek'));
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