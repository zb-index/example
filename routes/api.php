<?php

use Illuminate\Support\Facades\Route;
use Mak\Example\Http\Controllers\IndexController;

Route::get('/api/examples', IndexController::class)->name('example.index');