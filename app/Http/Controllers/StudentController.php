<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function name($name){
    //     return view('student', compact('name'));
    // }

    // public function date($date){
    //     return view('date', compact('date'));
    // }

    // public function age($age){
    //     return view('age', compact('age'));
    // }

    // public function get_name(){
    //     static $name=array(0=>"Dauren", 1=>"Talgat", 2=>"Maksat");
    //     return $name;

    public function display($name, $date, $age){
        return view('student', compact('name', 'date', 'age'));
    }
}
