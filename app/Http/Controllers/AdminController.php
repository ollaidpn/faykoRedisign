<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
       return view('admin.index');
   }

   public function historique(){
    return view('admin.historique');
}

public function versements(){
    return view('admin.versements');
}

public function transactions(){
    return view('admin.transactions');
}
public function services(){
    return view('admin.services');
}
public function cartes(){
    return view('admin.cartes');
}
public function agents(){
    // return view('admin.cartes');
}
}
