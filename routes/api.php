<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Rota customizada do desafio (deve vir ANTES do apiResource)
Route::put('tasks/{task}/complete', [TaskController::class, 'complete']);

// Rotas padrão do CRUD
Route::apiResource('tasks', TaskController::class);
