<?php

use Illuminate\Http\Request;

Route::get('/bling', [\Modules\Bling\Http\Controllers\BlingController::class, 'index']);
