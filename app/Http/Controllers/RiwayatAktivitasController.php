<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatAktivitasController extends Controller
{
    public function index()
    {
        return view('riwayataktivitas');
    }
}