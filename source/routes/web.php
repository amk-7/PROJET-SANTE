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
use App\Http\Controllers\CancelationPolitiqueController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\SpecialityController;

use App\Http\Controllers\UniteController;

use App\Http\Controllers\MeetController;



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


Route::get('meet/create', [MeetController::class, 'createMeeting'])->name('meet.create');
Route::get('meet/callback', [MeetController::class, 'callback'])->name('meet.callback');
Route::get('meet', [MeetController::class, 'showCreateForm'])->name('meet.form');
Route::post('meet', [MeetController::class, 'storeMeeting'])->name('meet.store');
Route::get('meet/{eventId}', [MeetController::class, 'showMeeting'])->name('meet.show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
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
'days' => DayController::class,
'images' => ImageController::class,
'addresses' => AddresseController::class,
'on_lines' => On_lineController::class,
'cancelation_politiques'=> CancelationPolitiqueController::class,
'schedules'=> sheduleController::class,
'specialitys' => specialityController::class,
'unite' => uniteController::class,
]);

require __DIR__.'/auth.php';
