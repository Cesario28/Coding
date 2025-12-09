<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MyController extends Controller
{
    public function page1(){
return Inertia::render('Page1');

    }
}
