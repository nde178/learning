<?php

namespace App\Exceptions;

use Exception;

class MyExeption extends Exception
{
    public function context(){
        return ['data'=>'Данные'];
    }
    public function render(){
        return ('Прикольчик');
    }


}
