<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skills()
    {
        return view('skills')
                ->with('skill1' , '•    Knowledge in programming/ scripting language: Low code (ADALO), Java, Python, HTML, CSS')
                ->with('skill2' , '•    Knowledgeable in MS Office Tools: Word, Excel, PowerPoint')
                ->with('skill3' , '•	Proficient in utilizing Canva, a graphic design platform')
                ->with('skill4' , '•	Knowledgeable in using Figma, a prototyping platform')
                ->with('skill5' , '•	Proven leadership ability and quality as evidenced in various school events')
                ->with('skill6' , '•	Flexible individual and team player who functions well in a fast-paced work environment')
                ->with('skill7' , '•	A person with a positive attitude as well as a professional and helpful demeanor')
                ->with('skill8' , '•	Proficient in communication skills and public speaking')
                ->with('skill9' , '•	Open-minded and dedicated to gaining new skills and knowledge for improvement in the workplace');

    }
}
