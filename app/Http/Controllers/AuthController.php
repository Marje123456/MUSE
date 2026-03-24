<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerArtist(Request $request)
    {
        dd($request->all());
    }

    public function registerCollector(Request $request)
    {
        dd($request->all());
    }

    public function login(Request $request)
    {
        dd($request->all());
    }
}