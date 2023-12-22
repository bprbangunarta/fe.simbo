<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use App\Models\Nasabah;
use App\Models\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekeningController extends Controller
{
    public function list()
    {
        $cif = Nasabah::where('user_id', Auth::id())->pluck('no_cif')->first();

        $simapan = Tabungan::where('nocif', $cif)->where('kodeprd', 01)->get();
        $siloka = Tabungan::where('nocif', $cif)->where('kodeprd', 02)->get();
        $simantap = Tabungan::where('nocif', $cif)->where('kodeprd', 03)->get();
        $simabrur = Tabungan::where('nocif', $cif)->whereIn('kodeprd', ['04', '05'])->get();
        $deposito = Deposito::where('nocif', $cif)->get();

        return view('rekening.list', compact(
            'simapan',
            'siloka',
            'simantap',
            'simabrur',
            'deposito'
            )
        );
    }
}
