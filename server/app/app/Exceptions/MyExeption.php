<?php

namespace App\Exceptions;

use Exception;

class MyExeption extends Exception
{
    public function render(){
        return response()->json(['Ошибка',404]);
    }
}
