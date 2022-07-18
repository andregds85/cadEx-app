<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\recebeController;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth']], function() {

    Route::resource('produto', ProdutoController::class);
    Route::get('/recebe/{v1}/{v2?}', [recebeController::class,'index']);




});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
