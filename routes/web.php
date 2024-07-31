<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;

Route::get('/' , [ForumController::class , 'home'])->name('home');
Route::get('/language/{lang}', [ForumController::class, 'switchLanguage'])->name('switch.language');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
