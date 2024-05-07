<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/enterpatient',[HomeController::class,'enterpatient']);

Route::get('/records',[HomeController::class,'viewrecords']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/blog',[HomeController::class,'blog']);

Route::get('/contact',[HomeController::class,'contact']);

Route::post('/submitpatient',[HomeController::class,'submitpatient']);

Route::get('/appointments',[HomeController::class,'doc_appointments']);

Route::get('/patient_rec',[AdminController::class,'patient_rec']);

#inventory routes
Route::get('/add_inventory', [AdminController::class, 'addInventory']);

Route::post('/upload_inventory', [AdminController::class, 'uploadInventory']);

Route::get('/view_inventory', [AdminController::class, 'viewInventory']);

Route::get('/edit_inventory/{id}', [AdminController::class, 'editInventory']);

Route::get('/delete_inventory/{id}', [AdminController::class, 'deleteInventory']);

Route::post('/update_inventory/{id}', [AdminController::class, 'updateInventory']);

#services routes
Route::get('/add_service', [AdminController::class, 'addService']);

Route::post('/upload_service', [AdminController::class, 'uploadService']);

Route::get('/view_service', [AdminController::class, 'viewService']);

Route::get('/edit_service/{id}', [AdminController::class, 'editService']);

Route::get('/delete_service/{id}', [AdminController::class, 'deleteService']);

Route::post('/update_service/{id}', [AdminController::class, 'updateService']);