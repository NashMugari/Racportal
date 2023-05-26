<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\products as Products;


class AdminController extends Controller
{

     public function index()
   {
     return view('admin');
   }

}
