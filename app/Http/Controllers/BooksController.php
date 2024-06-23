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
            'autor' => ['required', 'string', 'max:40'],
            'titulo' => ['required', 'string', 'max:40'],
            'subtitulo' => ['string', 'max:100'],
            'edição' => ['required', 'lowercase', 'max:20'],
            'editora' => ['required', 'max:120'],
            'ano_publicacao' => ['required', 'int']
        ]);

        $book = new Book();
        $book->id_user = $request->user()->id;
        $book->autor = $request->autor;
        $book->titulo = $request->titulo;
        $book->subtitulo = $request->subtitulo;
        $book->edição = $request->edição;
        $book->editora = $request->editora;
        $book->ano_da_publicação = $request->ano_publicacao;
       

        if($request->hasFile('capa') && $request->file('capa')->isValid()){

            $requestImage = $request->capa;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->capa->move(public_path('img/books'), $imageName);

            $book->capa = $imageName;

        }

        $book->save();


        return redirect()->route('dashboard.books');
    }

    public function edit($id)
    {
        $book = $this->objBook->find($id);
        $users = $this->objUser->all();
        return view('edit', compact('book', 'users'));
    }

    public function update(Request $request, $id)
    {

        $bookupd = Book::find($id);
        $input = $request->all();
        $bookupd->update($input);  

        return redirect()->route("dashboard.books");
    }

    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        return redirect()->route("dashboard.books");
    }

    public function show(){
        $book = $this->objBook->all();

        return view('vitrine', compact('book'));
    }
}
