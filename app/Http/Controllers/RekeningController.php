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
        $cif = Nasabah::find(Auth::user()->id);
        $tabungan = Tabungan::where('nocif', $cif)
            ->WhereNotin('kodeprd', ['11', '12'])
            ->get();

        $deposito = Deposito::where('nocif', '00133323808')->get();

        return view('rekening.list', compact('tabungan', 'deposito'));
    }
}
