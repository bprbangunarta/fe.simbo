<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use App\Models\Tabungan;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    public function index()
    {
        $tabungan = Tabungan::where('nocif', '00100107853')
            ->WhereNotin('kodeprd', ['11', '12'])
            ->get();

        $deposito = Deposito::where('nocif', '00133323808')->get();

        return view('rekening.list', compact('tabungan', 'deposito'));
    }
}
