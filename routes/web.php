<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/applicants/create',[ApplicantController::class,'create'])->name('applicant.create');
Route::post('/applicants/store',[ApplicantController::class,'store'])->name('applicant.store');