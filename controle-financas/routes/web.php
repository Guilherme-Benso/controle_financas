<?php

use App\Http\Controllers\FinanceiroController;
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

Route::get('/', function () {
    return view('financeiro');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix("financeiro")->controller(FinanceiroController::class)->name("financeiro.")->group(function(){
    Route::get("/", "index")->name("index");
    Route::get("/create", "create")->name("create");
    Route::post("/store", "store")->name("store");
    Route::get("/{id}/edit", "edit")->where('id', '[0-9]')->name("edit");
    Route::put("/update/{id}", "update")->where('id', '[0-9]')->name("update");
    Route::delete("/{id}", "destroy")->where('id', '[0-9]')->name("destroy");

});
