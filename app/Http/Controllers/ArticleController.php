<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index1()
    {
        return view('article.1', [
            'title' => 'Penyajian Data',
            'articles' => Article::all(),
        ]);
    }

    public function index2()
    {
        return view('article.2', [
            'title' => 'Penyajian Data',
            'articles' => Article::all(),
        ]);
    }

    public function index3()
    {
        return view('article.3', [
            'title' => 'Penyajian Data',
            'articles' => Article::all(),
        ]);
    }

    public function index4()
    {
        return view('article.4', [
            'title' => 'Penyajian Data',
            'articles' => Article::all(),
        ]);
    }
    
    public function index5()
    {
        return view('article.5', [
            'title' => 'Penyajian Data',
            'articles' => Article::all(),
        ]);
    }

    public function index6()
    {
        return view('article.6', [
            'title' => 'Penyajian Data',
            'articles' => Article::all(),
        ]);
    }

    public function quiz()
    {
        return view('article.quiz', [
            'title' => 'Penyajian Data',
        ]);

    }

    // public function articles(User $materi1)
    // {
    //     if ($materi1 == 1){
    //         return view ('article.1', [
    //             'title' => 'Penyajian Data',
    //             'articles' => Article::all(),
    //         ]);
    //     } 
    // }

}
