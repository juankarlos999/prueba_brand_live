<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombinerController extends Controller
{
    function generarCodigos($cantidad=20000, $longitud=7){ 

        $arrPassResult=array(); 
        $arr = str_split('TJEUINGRTSDA'); // get all the characters into an array
        $aux=array();
        $index=0; 
        while($index<$cantidad){ 
            for($i=0;$i < 2;$i++){ 
                shuffle($arr); // randomize the array
                $aux = array_slice($arr, 0, $longitud); // get the first six (random) characters out
                for ($indice = 0; $indice < $longitud; $indice++) { 
                    /*
                        El carácter ya va a estar en minúscula porque convertimos toda la cadena
                        allá arriba
                        Ahora vemos si dicho carácter está dentro del arreglo ["a", "e", "i", "o", "u"]
                    */
                    if (in_array($aux[$indice], ["A", "E", "I", "O", "U"])) {
                        break;
                    }
                    elseif($indice == $longitud-1){
                        $i--;
                        break;
                    }
                }
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
