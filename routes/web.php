<?php

use App\Http\Controllers\ArticuloController;
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
Route::get('/',function(){
    return view('auth.login');
});
Route::resource('articulos', ArticuloController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// // //las fachadas , sirven para saber si existe una vista.
// // if (view()->exists('vista1'))
// // {
// //     Route::get('/', function () {
// //         return view('vista1');
// //     });
// // }else{
// //     Route::get('/', function () {
// //         return 'la vista solic. no existe';
// //     });
// // }
// // //
// Route::get('/vista2',function ()
// {
//     $users =['Juan','Pedro','Maria','Ana'];
//     return view('vista2')->with('users',$users);
// });


// Route::get('/vista1',function ()
// {
//     return view('vista1');
// });

// Route::get('/usuario/{usuario}', function ($usuario) {
//     return '<h1>El usuario es:'.$usuario.'</h1>';
// //filtrar para solo strings:
// })->where('usuario','[A-Za-z]+');

