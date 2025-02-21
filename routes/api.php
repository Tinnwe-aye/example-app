<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('posts', PostController::class); //calling route - api/posts //create and edit is not include
Route::get('api/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('api/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

