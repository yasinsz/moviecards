<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'rating' => 'required',
            'date' => 'required',
            'genre' => 'required',
        ]);
    }
}
