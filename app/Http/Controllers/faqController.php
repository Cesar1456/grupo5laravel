<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqController extends Controller
{
  public function listado(){
    return view('faq');
  }
}
