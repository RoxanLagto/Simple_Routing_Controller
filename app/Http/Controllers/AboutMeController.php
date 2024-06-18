<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function about()
    {
        return view('about')
                ->with('name' , 'Roxan P. Lagto')
                ->with('address' , 'Purok 27 Upper Irisan Baguio City')
                ->with('phone' , '09687608124')
                ->with('email' , 'roxanlagto001@gmail.com')
                ->with('age' , '21 Years Old')
                ->with('bday' , 'February 18, 2003')
                ->with('height' ,	'151 cm')
                ->with('weight' , '52 kgs.');

    }
}
