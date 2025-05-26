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
Route::post('/index/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');
Route::get('/index/{id}/edit',[NoteController::class, 'edit'])->name('notes.edit');
Route::put('/index/{id}',[NoteController::class, 'update'])->name('notes.update');

