<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultantController;

use App\Http\Controllers\TarifController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Face_to_faceController;

use App\Http\Controllers\DayController;
use App\Http\Controllers\ImageController;

use App\Http\Controllers\AddresseController;
use App\Http\Controllers\On_lineController;
use App\Http\Controllers\CancelationPolitqueController;
use App\Http\Controllers\sheduleController;
use App\Http\Controllers\specialityController;


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
Route::get('/create_patient', function () {
    return view('patients.create');
});

Route::get('/index_patient', function () {
    return view('patients.index');
});

Route::get('/show_patient', function () {
    return view('patients.show');
});


/**fin */

Route::get('/create_staff', function () {
    return view('staffs.create');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::resources([
'patients'=> PatientController::class,
'consultants' => ConsultantController::class,

'tarifs' => TarifController::class,
'payement_modes' => PayementController::class,
'consultations' => ConsultationController::class,
'staffs' => StaffController::class,
'events'=> EventController::class,
'face_to_faces' => Face_to_faceController::class,
/*
'days' => DayController::class,
'images' => ImageController::class,
'addresses' => AddresseController::class,
'on_lines' => On_lineController::class,
'cancelation_politiques'=> CancelationPolitqueController::class,
'schedules'=> sheduleController::class,
'specialitys' => specialityController::class,
*/
]);

require __DIR__.'/auth.php';
