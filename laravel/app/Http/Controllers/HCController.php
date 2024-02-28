<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HCController extends Controller
{
    public function index()
    {
        return "<h1>Halaman ini berisi peralatan rumah tangga</h1>
        <br>
        <h2>Cleaning Tools</h2>
        <br>
        <br>
        <h2>Air Freshener</h2>";
    }
}
