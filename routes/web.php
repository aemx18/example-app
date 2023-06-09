<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


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

// Route::get('/', function () { //  return view yang bernama welcome
//     return view('welcome');
// });

Route::get('/', function () { // Router sendiri 
    return view('home' , [
       
    ]);
});


Route::get('/profile', [ProfileController::class, 'index']);
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profiles.update');

