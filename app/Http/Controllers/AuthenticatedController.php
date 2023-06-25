<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedController extends Controller
{
    public function showRegister()
    {
        return view('auth');
    }
}
