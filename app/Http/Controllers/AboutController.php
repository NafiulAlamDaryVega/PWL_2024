<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        $nim = 2241720048;
        $nama = 'Nafiul Alam Dary Vega';
        return 'NIM = '.$nim.'<br>Nama = '.$nama;
    }
}
