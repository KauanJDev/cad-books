<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Book $book)
    {
        $book->create([
            'id_user' => '1',
            'titulo' => 'teste',
            'autor' => 'teste',
            'subtitulo' => 'teste',
            'editora' => 'teste',
            'edição' => 'teste',
            'ano_da_publicação' => '2024'
        ]);
        $book->create([
            'id_user' => '1',
            'titulo' => 'teste',
            'autor' => 'teste',
            'subtitulo' => 'teste',
            'editora' => 'teste',
            'edição' => 'teste',
            'ano_da_publicação' => '2024'
        ]);
        $book->create([
            'id_user' => '1',
            'titulo' => 'teste',
            'autor' => 'teste',
            'subtitulo' => 'teste',
            'editora' => 'teste',
            'edição' => 'teste',
            'ano_da_publicação' => '2024'
        ]);
        $book->create([
            'id_user' => '1',
            'titulo' => 'teste',
            'autor' => 'teste',
            'subtitulo' => 'teste',
            'editora' => 'teste',
            'edição' => 'teste',
            'ano_da_publicação' => '2024'
        ]);
        $book->create([
            'id_user' => '1',
            'titulo' => 'teste',
            'autor' => 'teste',
            'subtitulo' => 'teste',
            'editora' => 'teste',
            'edição' => 'teste',
            'ano_da_publicação' => '2024'
        ]);
    }
}
