<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\TodoWebController;
use App\Models\Todo;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    $todos = Todo::where('user_id', auth()->id())->get();
    return view('dashboard', compact('todos'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    Route::resource('todos', TodoWebController::class);
});

require __DIR__.'/auth.php';
