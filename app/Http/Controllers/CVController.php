<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index(){
        return view('curriculum');
    }
}
