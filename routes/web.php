<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;

Route::get('/', [CertificateController::class, 'index']);

Route::post('/generate', [CertificateController::class, 'generate'])
    ->name('certificate.generate');