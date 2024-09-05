<?php

use App\Http\Controllers\CO;
use Illuminate\Support\Facades\Route;

// Route::get('/', CO::class);

Route::get('/', function () {

    return view('welcome');

});
