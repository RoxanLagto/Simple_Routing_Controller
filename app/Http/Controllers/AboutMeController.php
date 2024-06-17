<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function about()
    {
        return view('about')
                ->with('name' , 'Jheron Vallangca')
                ->with('address' , 'December 20, 2002')
                ->with('phone' , 'Baguio City')
                ->with('email' , '21 Years Old')
                ->with('age' , 'Male')
                ->with('bday' , 'Single')
                ->with('height' ,	'Filipino')
                ->with('weight' , 'Domingo H. Vallangca');

    }
}
