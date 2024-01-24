<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
   public function index()
   {
    return view('welcome');
   }
   public function AboutUs()
   {
    return view('aboutUs');
   }
   public function ContactUs()
   {
    return view('contact_us');
   }
}
