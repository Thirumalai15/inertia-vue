<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class TestViewController extends Controller
{
   public function index()
   {
       return Inertia::render('test');
   }

    public function contact()
    {
        return Inertia::render('Contact');
    }
}
