<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('test/create', [TestController::class, 'create'])->name('test.create');
Route::get('test/show/{test}', [TestController::class, 'show'])->name('test.show');
Route::get('test/list', [TestController::class, 'list'])->name('test.list');
Route::get('test/destroy', [TestController::class, 'destroy'])->name('test.destroy');