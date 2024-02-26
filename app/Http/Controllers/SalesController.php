<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales()
    {
        return view('sales', [
            'title' => 'Sales',
            'body' => 'This is Sales transaction Page'
        ]);
    }
}
