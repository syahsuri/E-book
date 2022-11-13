<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(FacadesAuth::guest()){
            return redirect('/login');
        }
        else{
            return view('index', [
                'title' => 'Tanyo Muruno | Beranda',
            ]);
        }
    }

    public function login()
    {
        return redirect('/login');
    }
}
