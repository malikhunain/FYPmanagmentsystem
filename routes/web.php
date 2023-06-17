<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\ProjectApplicationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectPhaseDataController;
use App\Http\Controllers\ProjectPhaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/dashboard-student', [StudentDashboardController::class, 'index'])->name('student.dashboard');

Route::get('/projects/apply', [ProjectApplicationController::class, 'create'])->name('student.project.application.create');
Route::post('/projects/apply', [ProjectApplicationController::class, 'store'])->name('student.project.application.store');

Route::get('/feedback/status', [ProjectApplicationController::class, 'index'])->name('student.feedback.status');

Route::get('/complaints/create', [ComplaintController::class, 'create'])->name('student.complaint.submit');
Route::post('/complaints', [ComplaintController::class, 'store'])->name('student.complaints.store');

Route::get('/projects/upload/{project}', [ProjectPhaseController::class, 'create'])->name('student.project.upload');
Route::post('/projects/upload/{project}', [ProjectPhaseDataController::class, 'store'])->name('student.project.upload.store');

require __DIR__.'/auth.php';
