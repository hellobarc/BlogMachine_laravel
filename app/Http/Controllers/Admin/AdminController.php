<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
    //    $this->middleware('auth');
    }

   public function dashboard(){

   // //dd(session()->getSessionConfig());
         dd(Auth::user());

   }
}
