<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;



Route::get('/', function () {
    return view('welcome');
});




Route::group(['middleware' => ['auth']], function() {

    Route::resource('produto', ProdutoController::class);



});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
