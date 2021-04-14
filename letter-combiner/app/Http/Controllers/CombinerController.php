<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombinerController extends Controller
{
    function generarCodigos($cantidad=2, $longitud=7){ 
        /*$caracteres = "TJEUINGRTSDA"; 
         
        $arrPassResult=array(); 
        $index=0; 
        while($index<$cantidad){ 
            $tmp=array(); 
            for($i=0;$i<$longitud;$i++){ 
                array_push($tmp, $caracteres[rand(0,strlen($caracteres)-1)]);
                $aux = implode($tmp);
            } 
            if(!in_array($tmp, $arrPassResult)){ 
                array_push($arrPassResult,$aux); 
                $index++; 
            } 
        } */

        $arrPassResult=array(); 
        $arr = str_split('TJEUINGRTSDA'); // get all the characters into an array
        $index=0; 
        while($index<$cantidad){ 
            for($i=0;$i<$longitud;$i++){ 
                shuffle($arr); // randomize the array
                $arr = array_slice($arr, 0, 6); // get the first six (random) characters out
                $str = implode('', $arr); // smush them back into a string
                array_push($arrPassResult, $str);
            }
        }
        return $arrPassResult; 
    }  
}
