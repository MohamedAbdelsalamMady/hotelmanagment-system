<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[AdminController::class,'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home',[AdminController::class,'index'])->name('home');
//CRUD On Hotel Rooms
Route::get('/create_room',[AdminController::class,'create_room']);
Route::post('/add_room',[AdminController::class,'add_room']);
Route::get('/view_room',[AdminController::class,'view_room']);
Route::get('/room_delete/{id}',[AdminController::class,'room_delete']);
Route::get('/room_update/{id}',[AdminController::class,'room_update']);
Route::post('/edit_room/{id}',[AdminController::class,'edit_room']);
//Display In Home Page
Route::get('/room_details/{id}',[HomeController::class,'room_details']);
Route::post('/add_booking/{id}',[HomeController::class,'add_booking']);
//Booking in Dashboard
Route::get('/bookings',[AdminController::class,'bookings']);
Route::get('/delete_booking/{id}',[AdminController::class,'delete_booking']);
Route::get('/approve_book/{id}',[AdminController::class,'approve_book']);
Route::get('/reject_book/{id}',[AdminController::class,'reject_book']);
//Gallery in Dashboard
Route::get('/view_gallery',[AdminController::class,'view_gallery']);
Route::post('/upload_gallery',[AdminController::class,'upload_gallery']);
Route::get('/delete_gallery/{id}',[AdminController::class,'delete_gallery']);
//Send Message by Contact
Route::post('/contact',[HomeController::class,'contact']);
//See all Messages in Dashboard
Route::get('/all_messages',[AdminController::class,'all_messages']);
//Send mail
Route::get('/send_mail/{id}',[AdminController::class,'send_mail']);
Route::post('/mail/{id}',[AdminController::class,'mail']);
