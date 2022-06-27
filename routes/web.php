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
    // return view('document.page4');
    return redirect()->route('dashboard.index');
});

Route::prefix('kai')->controller(DashboardController::class)->group(function ()
{
    Route::get('', 'index')->name('dashboard.index');
    Route::get('document-preview', 'documentPreview')->name('dashboard.documentPreview');
    Route::get('form', 'form')->name('dashboard.form');
    Route::get('findPegawai/{id}', 'findPegawai')->name('dashboard.findPegawai');
    Route::post('document/store', 'store')->name('dashboard.store');
    Route::get('document/{id}', 'fullPdf')->name('dashboard.fullPdf');
    Route::get('format-document', 'format')->name('dashboard.format');
    Route::get('page1-download', 'page1Download')->name('dashboard.page1Download');
    Route::get('page2-download', 'page2Download')->name('dashboard.page2Download');
    Route::get('page3-download', 'page3Download')->name('dashboard.page3Download');
    Route::get('page4-download', 'page4Download')->name('dashboard.page4Download');
    Route::get('export-swakelola', 'exportSwakelola')->name('export.swakelola');
});