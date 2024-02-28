<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BKController extends Controller
{
    public function index()
    {
        return "<h1>Halaman ini berisi perlengkapan bayi dan anak</h1>
        <br>
        <h2>Makanan Bayi</h2>
        <br>
        <br>
        <h2>Mainan</h2>";
    }
}
