<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
// return view('welcome');
// });
Route::get("/", function () {
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/add', [TodoController::class, 'store'])->name('Adding-Todos');
});
Route::get('/todo', [TodoController::class, 'index'])->name('index');






require __DIR__ . '/auth.php';


Route::get('auth/google', [Controller::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [Controller::class, 'callbackGoogle'])->name("callbackGoogle");
