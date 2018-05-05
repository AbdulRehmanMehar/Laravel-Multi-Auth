<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientsideController extends Controller
{
  function home(){
    return view('client.index');
  }
}
