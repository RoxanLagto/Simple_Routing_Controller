<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobbies()
    {
        return view('hobbies')
                ->with('hobby1' , '>    Watching Movies')
                ->with('hobby2' , '>    Sleeping')
                ->with('hobby3' , '>    Traveling')
                ->with('hobby4' , '>	Going to different cafes')
                ->with('hobby5' , '>	Eating');

    }
}
