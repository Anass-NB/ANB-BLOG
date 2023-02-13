<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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


Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin'], function () {

  Route::get("/posts", [PostController::class, "index"])->name("posts.index");
  Route::post("/posts/store", [PostController::class, "store"])->name("post.store");
  Route::post("/posts/delete", [PostController::class, "destroy"])->name("post.delete");
  Route::post("/posts/update", [PostController::class, "update"])->name("post.update");

  Route::get("/categories", [CategoryController::class, "index"])->name("categories.index");
  Route::post("/categories/store", [CategoryController::class, "store"])->name("categories.store");
  Route::post("/categories/delete", [CategoryController::class, "destroy"])->name("category.destroy");
});

Route::get("/", [HomeController::class, "index"])->name("posts.front");
Route::get("/posts/{slug}", [HomeController::class, "show"])->name("posts.show");
Route::view("/test", "test");

require __DIR__ . '/auth.php';
