<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;

Route::get('/', [democontroller::class, 'index']);
