<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->middleware(['auth'])->name('dashboard'); //Colocar middleware 'verified', caso queira verificar email.

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/roles', RoleController::class)->middleware(['auth', 'admin']);

Route::get('/users/{id}/edit', function($id)  {
    $user = User::find($id);
    return view('users.edit');
})->name('users.edit');

Route::delete('/users/{id}', function($id)  {
    $user = User::find($id);
    $user->delete();
    return redirect()->route('dashboard');
})->name('users.destroy');

require __DIR__.'/auth.php';
