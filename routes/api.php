<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/characters/{id}', [CharacterController::class, 'getOne']);
