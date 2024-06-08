<?php

namespace App\Http\Controllers\Traits;

trait ShareCodeTraits{
    function phoneCode($phone){
        $new_phone = '';
        $phoneArray = str_split($phone);
        if($phoneArray[0] == 0){
            $phoneArray[0] = 234;
         $new_phone =  implode('', $phoneArray);
        }
        return $new_phone;
    }
}