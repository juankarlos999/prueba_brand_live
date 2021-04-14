<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
        $num_letters = strlen($request->letters);
        $lengthWord = $request->lengthWord;

        //factorial n!
        $factorial_n = 1;
        for ($x = $num_letters; $x >= 1; $x--) {
            $factorial_n = $factorial_n * $x;
        }

        //factorial r!
        $factorial_r = 1;
        for ($y = $lengthWord; $y >= 1; $y--) {
            $factorial_r = $factorial_r * $y;
        }

        //factorial n-r!
        $factorial_nr = 1;
        $n_r = $num_letters - $lengthWord;
        for ($z = $n_r; $z >= 1; $z--) {
            $factorial_nr = $factorial_nr * $z;
        }
        
        return 'factorial n! '.$factorial_n.'factorial (n-r)! '.$factorial_nr;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
