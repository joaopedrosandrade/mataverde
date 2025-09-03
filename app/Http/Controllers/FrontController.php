<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function orcamento()
    {
        return view('front.orcamento');
    }

    public function representante()
    {
        return view('front.representante');
    }
}
