<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombinerController extends Controller
{
    function generarCodigos($cantidad=2, $longitud=7){ 
        $caracteres = "TJEUINGRTSDA"; 
         
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
        } 
        return $tmp; 
    }  
}
