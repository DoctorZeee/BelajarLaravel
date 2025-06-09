<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/{any}', function(){
    return view('notFoundPage');
})->where('any', '.*');