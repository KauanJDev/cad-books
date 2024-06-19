<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BooksController extends Controller
{
    private $objBook;
    private $objUser;

    public function __construct()
    {
        $this->objBook = new Book;
        $this->objUser = new User;
    }


    public function index()
    {
        $book = $this->objBook->all();
        $user = $this->objUser->all();

        return view('books', compact('book', 'user'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => ['required'],
            'autor' => ['required', 'string', 'max:40'],
            'titulo' => ['required', 'string', 'max:40'],
            'subtitulo' => ['string', 'max:100'],
            'edição' => ['required','lowercase','max:20'],
            'editora' => ['required','max:120'],
            'ano_publicacao' => ['required', 'int']
        ]);

        $book = $this->objBook->all();


        $book = new Book();
        $book->id_user = $request->id_user;
        $book->autor = $request->autor;
        $book->titulo = $request->titulo;
        $book->subtitulo = $request->subtitulo;
        $book->edição = $request->edição;
        $book->editora = $request->editora;
        $book->ano_da_publicação = $request->ano_publicacao;
        $book->save();

        return view('dashboard');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->author = $request->input('autor');
        $book->title = $request->input('titulo');
        $book->subtitle = $request->input('subtitulo');
        $book->edition = $request->input('edicao');
        $book->publisher = $request->input('editora');
        $book->publication_year = $request->input('ano_publicacao');
        $book->save();

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
