<?php

use App\Http\Controllers\InicioController;
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

Route::get('/',[InicioController::class,'index']);

// //las fachadas , sirven para saber si existe una vista.
// if (view()->exists('vista1'))
// {
//     Route::get('/', function () {
//         return view('vista1');
//     });
// }else{
//     Route::get('/', function () {
//         return 'la vista solic. no existe';
//     });
// }
// //


// Route::get('/usuario/{usuario}', function ($usuario) {
//     return '<h1>El usuario es:'.$usuario.'</h1>';
// //filtrar para solo strings:
// })->where('usuario','[A-Za-z]+');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

