<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UdalostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/udalosti', [UdalostController::class, 'index']);
