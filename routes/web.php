<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FutureEmployeesController;
use App\Http\Controllers\PendingClientController;
use App\Http\Controllers\ProfileController;
use App\Models\FutureEmployees;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::redirect('/dashboard', '/clients')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('clients', ClientController::class)->middleware('auth');
Route::resource('pendingClients', PendingClientController::class);
Route::resource('futureEmployees', FutureEmployeesController::class)->middleware('auth');


require __DIR__.'/auth.php';
