<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\SellerController;
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

Route::redirect('/', '/login');

Route::get('/login', function(){
    session()->forget("login");
    return view("login");
});

Route::get('/register', function(){
    return view("register");
});

Route::post('/login', [AccountController::class, "login"]);
Route::post('/register', [AccountController::class, "register"]);

Route::middleware(['cekseller'])->group(function(){
    Route::prefix("/seller")->group(function(){
        Route::get("/", function(){
            return view("seller/home");
        });

        Route::get("/order", [SellerController::class, "listOrder"]);

        Route::get("/product/add", [SellerController::class, "formAdd"]);

        Route::get("/product/list", [SellerController::class, "listProduk"]);


        Route::post("/product/add", [SellerController::class, "addProduk"]);
    });
});
