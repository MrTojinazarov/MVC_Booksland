<?php

use App\Routes\Route;
use App\Controllers\MainController;

Route::get("/", [MainController::class, 'index']);
Route::get("/authors", [MainController::class, 'authors']);
Route::get("/genre", [MainController::class, 'genre']);
Route::get("/addBooks", [MainController::class, "addBooks"]); #Kitob qo'shish fayli
Route::post("/addNewBook", [MainController::class, "addNewBook"]);
Route::post("/updateBook", [MainController::class, "updateBook"]);
Route::post("/update", [MainController::class, "update"]);
Route::post("/deleteBook", [MainController::class, "deleteBook"]);