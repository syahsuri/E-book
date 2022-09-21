<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProgressController extends Controller
{
    public function materi1()
    {
        return view('dashboard.materi1.index', [
            'title' => 'Materi 1',
        ]);
    }

    public function materi2()
    {
        return view('dashboard.materi2.index', [
            'title' => 'Materi 2',
        ]);
    }
}
