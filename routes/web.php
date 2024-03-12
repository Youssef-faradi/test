<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::post("/Home/store" , [HomeController::class , "store"])->name("home.store");
//* get

Route::get("/home/show/{home}", [HomeController::class, "show"])->name("home.show");


//& put
Route::put("/home/update/{home}" , [HomeController::class , "update"])->name("home.update");
Route::delete("/home/delete/{home}",[HomeController::class ,"destroy"])->name("home.destroy");