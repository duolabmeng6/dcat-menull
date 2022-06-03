<?php

use Ll\Menull\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::resource('menull', Controllers\MenullController::class, ['except' => ['create', 'show']]);
