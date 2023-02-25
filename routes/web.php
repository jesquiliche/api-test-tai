<?php

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

Route::get('/contacto',function(){
    return view('contacto');
})->name('contacto');

Route::get('/test', [App\Http\Controllers\TestController::class,'index'])->name('test');

Route::get('/preguntas', [App\Http\Controllers\PreguntaController::class,'index'])->name('preguntas');
Route::post('/corregir',[App\Http\Controllers\ExamenController::class,'corregir'])->name('corregir');
Route::get('/home',function(){
    return view('home');
})->name('home');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
