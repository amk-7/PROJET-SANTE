<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
/*les routeurs concernants un patient: fayssol */
Route::get('/create', function () {
    return view('patients.create');
});

Route::get('/index', function () {
    return view('patients.index');
});

Route::get('/show', function () {
    return view('patients.show');
});


/**fin */

Route::get('/create_staff', function () {
    return view('staffs.create');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';
