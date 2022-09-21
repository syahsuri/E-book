<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'nama_article' => 'Penyajian Data',
        ]);
        Article::create([
            'nama_article' => 'Mengapa data perlu disajikan?',
        ]);
        Article::create([
            'nama_article' => 'Menyajikan data variable kategori',
        ]);
        Article::create([
            'nama_article' => 'Diagram batang',
        ]);
        Article::create([
            'nama_article' => 'Diagram batang majemuk',
        ]);
        Article::create([
            'nama_article' => 'Diagram lingkar',
        ]);
        Article::create([
            'nama_article' => 'Diagram garis',
        ]);
    }
}
