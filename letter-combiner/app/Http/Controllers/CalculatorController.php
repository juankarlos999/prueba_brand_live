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
        for ($i = $num_letters; $i >= 1; $i--) {
            $factorial_n = $factorial_n * $i;
        }

        //factorial r!
        $factorial_r = 1;
        for ($i = $lengthWord; $i >= 1; $i--) {
            $factorial_r = $factorial_r * $i;
        }

        //factorial n-r!
        $factorial_nr = 1;
        $n_r = $num_letters - $lengthWord;
        for ($i = $n_r; $i >= 1; $i--) {
            $factorial_nr = $factorial_nr * $i;
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
