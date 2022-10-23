<?php

use App\Http\Controllers\users;
use App\Http\Controllers\articales;
use App\Http\Controllers\admin;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get("articales/list", [articales::class,"list"])->middleware("auth");
Route::get("articales/element/{id}", [articales::class,"element"])->middleware("auth");
Route::get("articales/create", [articales::class,"create"])->middleware("auth");
Route::post("articales/store", [articales::class,"store"])->middleware("auth");
Route::get("articales/edit/{id}", [articales::class,"edit"])->middleware("auth");
Route::post("articales/update", [articales::class,"update"])->middleware("auth");
Route::get("articales/delete/{id}", [articales::class,"delete"])->middleware("auth");


Route::get('home', function () { return view('index');})->middleware("auth")->middleware("admin");
Route::get('error', function () { return view('error');});

Route::get("login", [users::class,"login"])->name("login")->middleware("guest");
Route::post("loginRequest", [users::class,"loginRequest"])->middleware("guest");
Route::get("register", [users::class,"register"])->middleware("guest");
Route::post("registerRequest", [users::class,"registerRequest"])->middleware("guest");

Route::get("addAdmin", [admin::class,"addAdmin"])->middleware("admin")->middleware("auth");
Route::post("addAdminRequest", [admin::class,"addAdminRequest"]);

Route::get("logout", [users::class,"logout"]);

