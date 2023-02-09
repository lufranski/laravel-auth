<?php

use App\Http\Controllers\ProfileController;
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

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']) -> name('home');

// Show route
Route::get('/project/show/{project}', [MainController::class, 'show']) -> name('project.show');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Grouping private routes
Route::middleware('auth')->group(function (){
    // Destroy route
    Route::get('/project/delete/{project}', [MainController::class, 'destroy']) -> name('project.destroy');

    // Create route
    Route::get('/project/create', [MainController::class, 'create']) -> name('project.create');

    // Store route
    Route::post('/project/store', [MainController::class, 'store']) -> name('project.store');

    // Edit route
    Route::get('/project/edit/{project}', [MainController::class, 'edit']) -> name('project.edit');

    // Update route
    Route::post('/project/update/{project}', [MainController::class, 'update']) -> name('project.update');

    // After login route
    Route::get('/logged', [MainController::class, 'logged']) -> name('logged');
});

require __DIR__.'/auth.php';
