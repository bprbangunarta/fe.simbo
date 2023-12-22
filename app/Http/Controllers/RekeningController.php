<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use App\Models\Nasabah;
use App\Models\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekeningController extends Controller
{
    public function index()
    {
        $cif = Nasabah::where('user_id', Auth::id())->pluck('no_cif')->first();
        // dd($cif);

        $tabungan = Tabungan::where('nocif', $cif)
            ->WhereNotin('kodeprd', ['11', '12'])
            ->get();

        $deposito = Deposito::where('nocif', $cif)->get();

        return view('rekening.list', compact('tabungan', 'deposito'));
    }
}
