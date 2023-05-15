<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SpecialistsController;
use App\Http\Controllers\WelcomeController;
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


//HOME PAGE
Route::get('/',[WelcomeController::class,'home'])->name('home');

Route::get('/contact-us',[ContactUsController::class,'contactUs'])->name('contact_show');
Route::POST('/save-contact-us',[ContactUsController::class,'saveContactForm'])->name('saveContactForm');

//ABOUT US ROUTE
Route::get('/aboutUs',[AboutUsController::class,'aboutUs'])->name('aboutUs');

//BLOGS ROUTE
Route::get('/blogs',[BlogController::class,'blogs'])->name('blogs');

//CONDITIONS WE TREAT ROUTE
Route::get('/conditions-We-Treat',[ConditionsController::class,'conditions'])->name('conditions');


//GALLERY ROUTES 
Route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery');

Route::get('/picture-gallery',[GalleryController::class,'pictureGallery'])->name('pictureGallery');

Route::get('/video-gallery',[GalleryController::class,'videoGallery'])->name('videoGallery');



// OUR SPECIALISTS ROUTES
Route::get('/our-specialists',[SpecialistsController::class,'specialists'])->name('specialists');

Route::get('/deena-selais',[SpecialistsController::class,'deenaSelais'])->name('deenaSelias');

Route::get('/sarah-farooq',[SpecialistsController::class,'sarahFarooq'])->name('sarahFarooq');

Route::get('/nahid-butti',[SpecialistsController::class,'nahidButti'])->name('nahidButti');



//OUR SERVICES ROUTES
Route::get('/our-services',[ServicesController::class,'services'])->name('services');

Route::get('/orthopedic',[ServicesController::class,'orthopedic'])->name('orthopedic');

Route::get('/neuro-Rehab',[ServicesController::class,'neuroRehab'])->name('neuroRehab');

Route::get('/personal-trainer',[ServicesController::class,'personalTrainer'])->name('personalTrainer');

Route::get('/lymphodema',[ServicesController::class,'lymphodema'])->name('lymphodema');

