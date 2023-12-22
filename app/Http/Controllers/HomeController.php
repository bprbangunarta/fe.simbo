<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $no_tabungan = Nasabah::where('user_id', Auth::id())->pluck('no_tabungan')->first();

        $tabungan = Tabungan::where('noacc', $no_tabungan)
            ->WhereNotin('kodeprd', ['11', '12'])
            ->get();

        return view('home.index', compact('tabungan'));
    }
}
