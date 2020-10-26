<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; //MODEL

class StudentController extends Controller
{
    public function index(){
      return view('home');
    }
}
