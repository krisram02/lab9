<?php

use App\Http\Controllers\Api\SumaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/suma/{num1}/{num2}', [SumaController::class, 'suma']);
Route::get('/mult/{num1}/{num2}', [SumaController::class, 'multiplicacion']);


require __DIR__.'/auth.php';
