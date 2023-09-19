<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\Admin\DashboardController;

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

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});


require __DIR__.'/auth.php';