<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

use App\Http\Controllers\BloodDonationController;

Route::middleware(['web'])->group(function () {
    Route::post('/donate', [BloodDonationController::class, 'store'])->name('blood.donate');
});

Route::post('/find-blood', [BloodDonationController::class, 'search'])->name('blood.search');



route::get('/', [TemplateController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
