<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

Route::resource('/', StaticController::class)->only(['index', 'store']);
