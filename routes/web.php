<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check() ? redirect()->route('dashboard') : view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('home');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
    Route::get('/dashboard', [TeamController::class, 'index'])->name('dashboard'); 
    Route::resource('member', MemberController::class);
    Route::resource('team', TeamController::class);
    Route::resource('task', TaskController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [TeamController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
