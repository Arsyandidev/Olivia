<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::middleware(['admin'])->group(function () {
        Route::resource('isadmin', AdminController::class);
    });
});

Route::get('/',[FrontendController::class,'index'])->name('beranda');
Route::get('/sejarah',[FrontendController::class,'sejarah'])->name('sejarah');
Route::get('/article',[FrontendController::class,'article'])->name('article');
Route::get('/detailarticle',[FrontendController::class,'detailarticle'])->name('detailarticle');
