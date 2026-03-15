<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/status', [ApiController::class, 'status']);
Route::get('/clients', [ApiController::class, 'clients']);
Route::get('/clients/{id}', [ApiController::class, 'getClientById']);
Route::post('/client', [ApiController::class, 'client']);

Route::post('/clients', [ApiController::class, 'addClient']);
Route::put('/clients', [ApiController::class, 'updateClient']);
Route::delete('/clients/{id}', [ApiController::class, 'deleteClient']);
