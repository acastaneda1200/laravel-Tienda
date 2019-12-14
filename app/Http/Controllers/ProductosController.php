<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
      
        return view("productos.index");
    }
}
