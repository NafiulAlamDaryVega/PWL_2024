<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        $nim = 2241720048;
        $nama = 'Nafiul Alam Dary Vega';
        return 'NIM = '.$nim.'<br>Nama = '.$nama;
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id '.$id;
    }
}
