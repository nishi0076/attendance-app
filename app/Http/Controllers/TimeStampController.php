<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\Auth;

class TimeStampController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('attendance.index', $user);
    }
}
