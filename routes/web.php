<?php

use App\Http\Controllers\CO;
use Illuminate\Support\Facades\Route;

// Route::get('/', CO::class);

Route::get('/', function () {

    return view('welcome');

});

Route::prefix('/elastic')->group(function () {

    Route::get('/mapping', [CO::class, 'mapping'])->name('elastic');

    Route::get('/analyze', [CO::class, 'analyze'])->name('analyze');


});

