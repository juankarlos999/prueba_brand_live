<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombinerController extends Controller
{
    function generarCodigos($cantidad=10000, $longitud=7){ 

        $arrPassResult=array(); 
        $arr = str_split('TJEUINGRTSDA'); // get all the characters into an array
        $aux=array();
        $index=0; 
        while($index<$cantidad){ 
            for($i=0;$i < 2;$i++){ 
                shuffle($arr); // randomize the array
                $aux = array_slice($arr, 0, $longitud); // get the first six (random) characters out
                $str = implode($aux); // smush them back into a string  
            }
            if(!in_array($str, $arrPassResult)){ 
                array_push($arrPassResult, $str); 
                $index++;
            }
        }
        return $arrPassResult; 
    }  
}
