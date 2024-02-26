<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodBeverage()
    {
        return view('category', [
            'title' => 'Food and Beverages',
            'body' => 'This is Food Beverages page'
        ]);
    }
    
    public function beautyHealth() 
    {
        return view('category', [
            'title' => 'Beauty and Health',
            'body' => 'This is Beauty Health page'
        ]);
    }

    public function homeCare()
    {
        return view('category', [
            'title' => 'Home Care',
            'body' => 'This is Home Care page'
        ]);
    }

    public function babyKid()
    {
        return view('category', [
            'title' => 'Baby Kid',
            'body' => 'This is Baby Kid page'
        ]);
    }
}