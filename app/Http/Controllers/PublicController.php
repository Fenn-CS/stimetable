<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    public function home()
    {
        return view('welcome');
    }

    public function shops()
    {
        return view('shops');
    }

    public function exchange()
    {
        return view('exchange');
    }

    public function charity()
    {
        return view('charity');
    }

    public function centers()
    {
        return view('centers');
    }
}
