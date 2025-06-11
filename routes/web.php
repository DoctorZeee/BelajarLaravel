<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MediaController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
//about routes
Route::get('/admin/abouts', [AboutController::class,'edit'])->name('abouts.edit');
Route::patch('/admin/abouts', [AboutController::class,'update'])->name('abouts.update');
//Meida routes
Route::get('/admin/medias', [MediaController::class,'index'])->name('medias.index');


Route::get('/{any}', function(){
    return view('notFoundPage');
})->where('any', '.*');