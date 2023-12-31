<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $no_tabungan = Nasabah::where('user_id', Auth::id())->pluck('no_tabungan')->first();
        $response = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/$no_tabungan");

        if ($response->successful()) {
            $saldo = $response->json();

            if (is_array($saldo)) {
                return view('home.index', compact('saldo'));
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
