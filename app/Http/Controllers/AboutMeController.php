<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
{
    $data = [
        'name' => 'Jessie G. Cadiogan',
        'age' => 24,
        'occupation' => 'OJT-Student'
    ];

    return view('about_me', compact('data'));
}
}
