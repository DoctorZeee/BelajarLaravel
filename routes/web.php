<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/admin/abouts', [AboutController::class,'edit'])->name('abouts.edit');

Route::get('/{any}', function(){
    return view('notFoundPage');
})->where('any', '.*');