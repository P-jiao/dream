<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Http\Middleware\AgeMiddleware;



class AgeController extends Controller{


    public function age(){
        $this->middleware('csrf');
        $this->middleware('age');
    }
}