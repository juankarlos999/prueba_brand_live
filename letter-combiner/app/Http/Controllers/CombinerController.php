<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CombinerController extends Controller
{
    function wordGenerator($numCombinations, $wordLength, $letters){ 

        $arrPassResult=array(); 
        $arr = str_split($letters); // get all the characters into an array
        $aux=array();
        $index=0; 
        while($index<$numCombinations){ 
            for($i=0;$i < 2;$i++){ 
                shuffle($arr); // randomize the array
                $aux = array_slice($arr, 0, $wordLength); // get the first six (random) characters out

                $str = implode($aux); // smush them back into a string 
            }
            if(!in_array($str, $arrPassResult)){ 
                array_push($arrPassResult, $str); 
                $index++;
            }
        }
        return view('home', compact('arrPassResult', 'numCombinations'));
    }  
}
