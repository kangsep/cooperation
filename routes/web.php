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

Route::get('my-name', function() {
    echo "Asep Salas";
});

Route::get('my-city/{param}', function($city) {
    echo "Kota saya di  " . $city;
});

Route::get('get-student/{name}/{code}', function($name,$code) {
    echo "Nama saya " . $name. " NRP " . $code;
});

