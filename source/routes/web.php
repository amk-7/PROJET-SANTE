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

Route::get('/create_staff', function () {
    return view('staffs.create');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::ressources([
'patients'=> PatientController::class,
'consultants' => ConsultantControler::class,
'tarifs' => TarifController::class,
'payement_modes' => PayementController::class,
'consultations' => ConsultationController::class,
'staffs' => StaffController::class,
'events'=> EventController::class,
'face_to_faces' => Face_to_faceController::class,
'days' => DayController::class,
'images' => ImageController::class,
'addresses' => AddressesController::class,
'on_lines' => On_lineController::class,
'cancelation_politiques'=> ConcelationPolitqueController::class,
'schedules'=> shedulesController::class,
'specialitys' => specialityController::class,


])

require __DIR__.'/auth.php';
