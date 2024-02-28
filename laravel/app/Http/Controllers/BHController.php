<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BHController extends Controller
{
    public function index()
    {
        return "<h1>Halaman ini berisi perawatan kesehatan dan kosmetik</h1>
        <br>
        <h2>Kosmetik</h2>
        <br>
        <br>
        <h2>Kesehatan</h2>";
    }
}
