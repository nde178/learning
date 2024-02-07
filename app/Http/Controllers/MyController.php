<?php

namespace App\Http\Controllers;

use App\Exceptions\MyExeption;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myExeption(){
        throw new MyExeption();
    }   
}
