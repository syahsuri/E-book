<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->guest() || auth()->user()->role == 0) {
            abort(403);
        }
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }
}
