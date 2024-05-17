<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Test;


Route::get('/', function () {
    return view('welcome');
});

Route::get("test1",Test::class );//  cu tot cu templatwe
Route::get('/test', function () {   //doar componenta
    return view('livewire.test');
});


//Route::get("student",[App\Http\Controllers\StudentController::class,'index']);
Route::get("student",App\Livewire\Student::class);


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
