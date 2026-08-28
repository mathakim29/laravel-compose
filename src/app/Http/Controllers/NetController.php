<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetController extends Controller
{
    public function show()
    {
        $name = 'Alex';
        $tasks = ['Learn Laravel', 'Master Vite', 'Build Apps'];

        // Pass data using compact() or an array
        return view('welcome', compact('name', 'tasks'));
    }
}