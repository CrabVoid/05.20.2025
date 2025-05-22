<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [NoteController::class , 'index']);
Route::get('/create', [NoteController::class , 'create']);
Route::post('/index', [NoteController::class , 'store']);
Route::get('/index/{id}', [NoteController::class, 'show']);
Route::delete('/index/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');
