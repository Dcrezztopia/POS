<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FBController extends Controller
{
    public function index()
    {
        return "<h1>Halaman ini berisi makanan dan minuman</h1>
        <br>
        <h2>Makanan</h2>
        <br>
        <br>
        <h2>Minuman</h2>";
    }
}
