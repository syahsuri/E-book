<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardProgressController extends Controller
{
    public function materi1()
    {
        return view('dashboard.materi1.index', [
            'title' => 'Materi 1',
            'users' => User::all()
        ]);
    }

    public function materi2()
    {
        return view('dashboard.materi2.index', [
            'title' => 'Materi 2',
        ]);
    }
}
