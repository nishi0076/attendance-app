<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeStampController extends Controller
{
    public function index()
    {
        return view('attendance.index');
    }
}
