<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBukuController extends Controller
{
    function tampilkan($isbn, $judul){
        return view('list_buku', ['isbn' => $isbn, 'judul' => $judul]);
    }
}
