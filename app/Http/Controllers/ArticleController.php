<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index1()
    {
        return view('article.1', [
            'title' => 'Penyajian Data',
        ]);

    }

    public function index2()
    {
        return view('article.2', [
            'title' => 'Penyajian Data',
        ]);

    }
    

}
