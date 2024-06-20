<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
{
    $hobbies = ['Travelling', 'Gaming', 'riding Motorcycle'];

    return view('hobbies', compact('hobbies'));
}
}
