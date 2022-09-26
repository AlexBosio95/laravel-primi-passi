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

    $printTitle = 'Hello Laravel';

    return view('home', ['title' => $printTitle]);

})->name('PaginaHome');

Route::get('/user', function () {

    $listUser = ['Mario', 'Pino', 'Filippo', 'Gianni', 'Pietro'];

    return view('user', ['listUser' => $listUser]);

})->name('PaginaUser');
