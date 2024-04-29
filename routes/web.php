<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonController;

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

Route::get('customer/my-name', [CustomerController::class, 'index']);

Route::get('customer/my-city/{city}', [CustomerController::class, 'getCity']);

Route::get('customer/get-student/{name}/{code}', [CustomerController::class, 'getStudent']);

Route::get('person/create', [PersonController::class, 'create'])->name('person.create');
Route::post('person/store', [PersonController::class, 'store'])->name('person.store');

