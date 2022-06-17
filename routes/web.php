<?php

use App\Http\Controllers\DashboardController;
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
    return view('document.page4');
    // return redirect()->route('dashboard.index');
});

Route::prefix('kai')->controller(DashboardController::class)->group(function ()
{
    Route::get('', 'index')->name('dashboard.index');
    Route::get('format-document', 'format')->name('dashboard.format');
});