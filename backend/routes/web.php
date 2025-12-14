<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DataController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('datos', [DataController::class, 'getDatos']);
