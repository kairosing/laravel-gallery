<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
   public function index(){
        $images = DB::table('images')->select('*')->get();
        $myImages = $images->all();
        return view('welcome', ['imagesInView' => $myImages]);
    }
}
