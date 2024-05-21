<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Test;
use App\Livewire\ContactForm;

Route::get('/', function () {
    return view('student.index');
});

Route::get("test1",Test::class );//  cu tot cu template , doar asa merge bine
Route::get('/test', function () {   //doar componenta
    return view('livewire.test');
});
Route::get('contact',ContactForm::class);

//Route::get("student",[App\Http\Controllers\StudentController::class,'index']);
Route::get("student",App\Livewire\Student::class);
Route::get('contact',[App\Http\Controllers\StudentController::class, 'contact'])->name('contact');
Route::get('userform', [App\Http\Controllers\StudentController::class, 'userform'])->name('userform');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
