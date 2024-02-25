<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function getHome(){
    return view('Home');
   }  

   public function getABout(){
      return view('About');
   }

   public function geServices(){
    return view('Services');
   }

   public function getGallery(){
      return view('Gallery');
   }
   public function getContact(){
    return view('Contact');
   }
}