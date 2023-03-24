<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

// SIGNUP 

Route::get ('/', [AuthController::class, 'register'])->name ('register');
Route::post ('/signup', [AuthController::class, 'signup'])->name ('signup');

// SIGNIN

Route::get ('/login', [LoginController::class, 'login'])->name ('login');
Route::post ('/signin', [LoginController::class, 'signin'])->name ('signin');

// PRIVATE PAGE AND LOGOUT

Route::get ('/private-page', [ContactController::class, 'private_page'])->name ('private_page');
Route::get ('/private-page/logout', [ContactController::class, 'logout'])->name ('logout');

// ADD CONTACT AND VIEW CONTACT

Route::get ('/private-page/addcontact/{user}', [ContactController::class, 'addcontact'])->name ('addcontact');
Route::post ('/private-page/addcontact/savecontact/{user}', [ContactController::class, 'savecontact'])->name ('savecontact'); 
Route::get ('/private-page/view-contacts/{user}', [ContactController::class, 'viewcontacts'])->name ('view_contacts');

// DELETE CONTACT

Route::get ('/private-page/delete-contact/{id}', [ContactController::class, 'delete_contact'])->name ('delete_contact');

// ADDING A PHONE NUMBER TO ONE CONTACT AND DELETE PHONE NUMBER

Route::get ('/private-page/view-contacts/add-phone/{id}', [ContactController::class, 'add_phone'])->name ('add_phone');
Route::post ('/private-page/view-contacts/add-phone/phone-save/{id}', [ContactController::class, 'phone_save'])->name ('phone_save');
Route::get ('/delete-phone/{id}', [ContactController::class, 'delete_phone'])->name ('delete_phone');

// ADDING A EMAIL ADDRESS TO ONE CONTACT AND DELETE EMAIL ADDRESS

Route::get ('/private-page/view-contacts/add-email/{id}', [ContactController::class, 'add_email'])->name ('add_email');
Route::post ('/private-page/view-contacts/add-email/email-save/{id}', [ContactController::class, 'email_save'])->name ('email_save');
Route::get ('/delete-email/{id}', [ContactController::class, 'delete_email'])->name('delete_email');

// UPDATE PHONE NUMBER, EMAIL ADDRESS, CONTACT -> name, surname, lastname

Route::get ('/update-contact/{id}', [ContactController::class, 'update_contact'])->name('update_contact');
Route::patch ('/update-save-contact/{id}', [ContactController::class, 'update_save_contact'])->name('update_save_contact');
Route::get ('/update-phone/{id}', [ContactController::class, 'update_phone'])->name('update_phone');
Route::patch ('/update-save-phone/{id}', [ContactController::class, 'update_save_phone'])->name('update_save_phone');
Route::get ('/update-email/{id}', [ContactController::class, 'update_email'])->name('update_email');
Route::patch ('/update-save-email/{id}', [ContactController::class, 'update_save_email'])->name('update_save_email');

// SEARCH 

Route::get ('/private-page/search', [ContactController::class, 'search'])->name ('search');









