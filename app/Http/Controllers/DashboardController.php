<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // return view('dashboard.index');
        $title = '';
        return view('dashboard.index', [
            "title" => "All Posts" . $title,
            "active" => 'dashboard'
        ]);
    }
}