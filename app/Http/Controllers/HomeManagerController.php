<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeManagerController extends Controller
{
    public function index()
    {
        return Inertia::render('HomeManager', [
            'UserName' => 'Raphael Reges Valente',
        ]);
    }
}
