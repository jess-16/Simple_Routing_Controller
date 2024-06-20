<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = ['Singing', 'dancing', 'Driving'];
    
        return view('skills', compact('skills'));
    }
}
