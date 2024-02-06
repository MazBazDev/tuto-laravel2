<?php

use App\Http\Controllers\BonjourController;
use App\Http\Controllers\HousesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/bonjour", [BonjourController::class, "index"]);

Route::get("/mazbaz/{name}", [BonjourController::class, "mazbaz"]);

Route::resource("houses", HousesController::class);
