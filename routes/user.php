<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserDashboardController;


Route::group(['prefix' =>'user', 'middleware' => 'user'], function(){
    Route::get('/home', [UserDashboardController::class , 'index'])->name('userDashboard');

});
