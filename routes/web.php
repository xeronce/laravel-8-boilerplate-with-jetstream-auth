<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {return view('welcome');});
Route::group(['middleware'=>['auth:sanctum']], function (){
    Route::get('/dashboard', [DashboardController::class, 'getDashboardData']);
});
