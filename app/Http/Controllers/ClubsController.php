<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function showIndex(){
        return view('clubs');
    }
}
