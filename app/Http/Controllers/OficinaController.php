<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OficinaController extends Controller
{
    public function index()
{
    return view('oficinas.index');
}
}
