<?php

use App\Http\Controllers\CmsPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () { 
    return view('home'); 
})->name('home');

Route::get('/{slug}', [CmsPageController::class, 'show'])
    ->name('cms.page');
