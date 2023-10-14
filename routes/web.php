<?php

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

Route::get('/', 'Main@index');

// return views alpha.blade.php

Route::get('/db', 'Main@db');

Route::view('/user', 'userview', [
    'name' => 'James',
    'email' => 'james@email.com'
]);
