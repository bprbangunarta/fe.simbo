<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use App\Models\Nasabah;
use App\Models\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Spatie\Ignition\Solutions\OpenAi\DummyCache;

class RekeningController extends Controller
{
    public function list()
    {
        $cif = Nasabah::where('user_id', Auth::id())->pluck('no_cif')->first();

        $simapanData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/simapan/$cif");
        $silokaData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/siloka/$cif");
        $simantapData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/simantap/$cif");
        $simabrurData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/simabrur/$cif");
        $depositoData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/deposito/$cif");

        if (
            $simapanData->successful() &&
            $silokaData->successful() &&
            $simantapData->successful() &&
            $simabrurData->successful() &&
            $depositoData->successful()
        ) {
            $simapan = $simapanData->json();
            $siloka = $silokaData->json();
            $simantap = $simantapData->json();
            $simabrur = $simabrurData->json();
            $deposito = $depositoData->json();

            if (
                is_array($simapan) &&
                is_array($siloka) &&
                is_array($simantap) &&
                is_array($simabrur) &&
                is_array($deposito)
            ) {
                return view('rekening.list', compact('simapan', 'siloka', 'simantap', 'simabrur', 'deposito'));
            } else {
                $error_message = 'Invalid data format';
                return view('error', compact('error_message'));
            }
        } else {
            $error_message = 'Failed to fetch data from API';
            return view('error', compact('error_message'));
        }
    }

    public function dummy()
    {
        $simapanData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/simapan/00100117103");
        $silokaData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/siloka/00101101390");
        $simantapData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/simantap/00100107853");
        $simabrurData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/simabrur/00133325259");
        $depositoData = Http::get("https://api.bprbangunarta.co.id/api/v1/tabungan/deposito/00133328860");

        if (
            $simapanData->successful() &&
            $silokaData->successful() &&
            $simantapData->successful() &&
            $simabrurData->successful() &&
            $depositoData->successful()
        ) {
            $simapan = $simapanData->json();
            $siloka = $silokaData->json();
            $simantap = $simantapData->json();
            $simabrur = $simabrurData->json();
            $deposito = $depositoData->json();

            if (
                is_array($simapan) &&
                is_array($siloka) &&
                is_array($simantap) &&
                is_array($simabrur) &&
                is_array($deposito)
            ) {
                return view('rekening.list', compact('simapan', 'siloka', 'simantap', 'simabrur', 'deposito'));
            } else {
                $error_message = 'Invalid data format';
                return view('error', compact('error_message'));
            }
        } else {
            $error_message = 'Failed to fetch data from API';
            return view('error', compact('error_message'));
        }
    }
}
