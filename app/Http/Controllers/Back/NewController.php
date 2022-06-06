<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends Controller
{
//    public function __construct(){
//        $this -> middleware('auth')->except('ShowController2');
//}
    public function ShowController(){

    }

        public function Show(){
            $object=[];
//            $object= new \stdClass();
//            $object -> name='samar';
//            $object -> id=5;
//            $object -> gender='famele';
//            $object -> isEmpty= '';
            Return view('welcome',compact('object'));
        }

    public function ShowController2(){
        Return 'ShowController2';
    }
    public function Call(){
        return view('welcome');
    }
}
