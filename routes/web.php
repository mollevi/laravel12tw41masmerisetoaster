<?php

use Illuminate\Support\Facades\Route;
use Masmerise\Toaster\Toaster;

Route::get('/', function () {
    Toaster::info("Hello World!");
    return view('welcome');
});
