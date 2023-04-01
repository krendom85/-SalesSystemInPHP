<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FutureEmployeesController;
use App\Http\Controllers\PendingClientController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Client;
use App\Models\FutureEmployees;
use App\Models\Post;
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

// Route::get('/blog', function () {
//     return view('Blog');
// });


Route::get('/loginBuy',function(){
    return view('clients.login');
});

Route::get('/result',function(){
    return view('clients.result');
});

Route::get('/registerBuy/{plan}',function(int $plan){
    return view('clients.createClient',['client' => new Client(),'plan'=>$plan]);
});


Route::redirect('/dashboard', '/clients')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('clients', ClientController::class);
Route::post('/clients/confirm',[ClientController::class,'confirm'])->name('clients.confirm');

Route::resource('pendingClients', PendingClientController::class);
Route::resource('futureEmployees', FutureEmployeesController::class)->middleware('auth');

Route::resource('posts', PostController::class);
Route::get('/blog1',[PostController::class,'showBlog1'])->name('blog1');
Route::get('/blog2',[PostController::class,'showBlog2'])->name('blog2');
Route::get('/blog3',[PostController::class,'showBlog3'])->name('blog3');

require __DIR__.'/auth.php';
