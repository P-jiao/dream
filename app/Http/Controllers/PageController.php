<?php
namespace App\Http\Controllers;
use App\Http\Controllers;



class PageController extends Controller
{
Public function about(){
   // $name = '<span style="color: red;">Specs</span>';
   /* $first = 'John';
    $second= '23';*/
    $people = ['john','faasd','sdfj'];
    return view('new',compact('people'));
   // return view('new',compact('first', 'second'));

}

}