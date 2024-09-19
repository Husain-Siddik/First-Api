<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::group(['prefix'=> 'v1'], function () {

// });

Route ::get('v1/posts',[PostController::class,'index']);
Route ::post('v1/posts',[PostController::class,'store']);
Route ::get('v1/posts/{id}',[PostController::class,'show']);
Route ::put('v1/posts/{post}',[PostController::class,'update']);
Route ::delete('v1/posts/{post}',[PostController::class,'destroy']);
