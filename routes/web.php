<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

Route::get('/home', [HomeController::class, 'index']);


Route::get('/profile/{id}', [ProfileController::class, 'show']);

Route::get('/contact', [ContactController::class, 'showContactForm']);
