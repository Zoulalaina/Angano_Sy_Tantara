<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnganoController;
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
Route::get('/ajouter', AnganoController::class.'@create')-> name('create');
Route::get('/liste', AnganoController::class.'@listeAngano')-> name('listeAngano');
//Route::post('/Ajouter', AnganoController::class.'@store')-> name('store');
Route::post('/ajouter',[AnganoController::class,'store']);
//Route::delete('/ajouter', [AnganoControlle::class, 'supprimerAngano'])->name('supprimerAngano');
//Route::get('/contact', 'ContactController@index')->name('contact'); 
Route::delete('/angano/{id}',[AnganoController::class, 'supprime'])->name('angano.destroy');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
