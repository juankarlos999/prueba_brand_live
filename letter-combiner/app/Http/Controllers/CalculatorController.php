<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CombinerController;

class CalculatorController extends Controller
{
    /**
     * Algorithm that processes the number of possible combinations with the 
     * given letters.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calculatorCombiner(Request $request)
    {
        // Formula for combinations: nCr = n! / (n-r)! r!
        $letters = strlen($request->letters);
        $lengthWord = $request->lengthWord;

        //factorial n!
        $factorial_n = 1;
        for ($x = $letters; $x >= 1; $x--) {
            $factorial_n = $factorial_n * $x;
        }

        //factorial r!
        $factorial_r = 1;
        for ($y = $lengthWord; $y >= 1; $y--) {
            $factorial_r = $factorial_r * $y;
        }

        //factorial n-r!
        $factorial_nr = 1;
        $n_r = $letters - $lengthWord;
        for ($z = $n_r; $z >= 1; $z--) {
            $factorial_nr = $factorial_nr * $z;
        }
        
        $nCr = $factorial_n / ($factorial_nr * $factorial_r);

        $listWords= new CombinerController();
        return $listWords->wordGenerator($nCr, $lengthWord, $letters);
    }
}
