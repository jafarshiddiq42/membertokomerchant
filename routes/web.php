<?php

use App\Http\Controllers\profilecontroller;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
    // $kategori = Kategori::all();
    // dd($kategori);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/homeadmin',function ()
{
    return view('homeadmin');
})->name('homeadmin')->middleware('admin');

Route::get('/loginadmin', function ()
{
    return view('auth.loginadmin');
})->middleware('guest');

Route::get('/profile',[profilecontroller::class,'profile']);
Route::post('/passverification',[profilecontroller::class,'oldpassverification']);