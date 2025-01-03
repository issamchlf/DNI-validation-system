<?php

use Illuminate\Support\Facades\Route;


Route::get('/dni-calculator', function () {
    return view('dni_calculator');
});