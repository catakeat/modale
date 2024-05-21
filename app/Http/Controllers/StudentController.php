<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return view('student.index');
    }
    
    function contact(){

        return view('student.contact');
    }
    function userform(){
        return view('student.userform');
    }
}
