<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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

Route::get('/date', function () {
    return view('date');
});

Route::post('/total', function (\Illuminate\Http\Request $request) {
    $date = $request->checkDate;
    $now = Carbon::now();

    $result = $now->diffInYears($date);

    return view('date',compact('result'));
});

