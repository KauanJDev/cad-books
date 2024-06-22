<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
        $book = $this->objBook->paginate(25);
        $user = $this->objUser->all();

        return view('books', compact('book', 'user'));
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

    public function edit($id)
    {
        $book = $this->objBook->find($id);
        $users = $this->objUser->all();

        return view('create', compact('book', 'users'));
    }


    public function update(Request $request, $id)
    {
        $book = $this->objBook->all();

        $bookupd = Book::find($id);
        $input = $request->all();
        $bookupd->update($input);

        return view('books', compact('book'));
    }

    public function destroy($id)
    {
        $book = $this->objBook->all();

        Book::where('id',$id)->delete();
        return redirect()->route("dashboard.books");
    }
}
