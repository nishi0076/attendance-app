<?php

use App\Http\Controllers\AuthenticatedController;
use App\Http\Controllers\TimeStampController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [TimeStampController::class, 'index'])
->middleware('auth')
->name('attendance.index');




require __DIR__.'/auth.php';
