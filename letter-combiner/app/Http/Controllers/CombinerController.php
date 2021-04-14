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
            $tmp=""; 
            for($i=0;$i<$longitud;$i++){ 
                $tmp=$caracteres[rand(0,strlen($caracteres)-1)]; 
            } 
            if(!in_array($tmp, $arrPassResult)){ 
                $arrPassResult[]=$tmp; 
                $index++; 
            } 
        } 
        return $arrPassResult; 
    }  
}
