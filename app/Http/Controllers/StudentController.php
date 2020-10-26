<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; //MODEL

class StudentController extends Controller
{
    public function index(){
      $students = Student::all();
      return view('home', compact('students'));
    }
}
