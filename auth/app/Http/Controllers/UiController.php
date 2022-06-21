<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    
    public function client()
    {
        return view('client');
    }
    
    
    public function rektor()
    {
        return view('rektor');
    }
    
    
    public function beranda()
    {
        return view('welcome');
    }

    

}
