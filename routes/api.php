<?php

use App\Http\Controllers\ApiRecordController;
use Illuminate\Support\Facades\Route;

Route::get('/records', [ApiRecordController::class, 'index']);