<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function listar()
    {
        $books = Book::orderBy('id', 'desc')->get();
        return view('libro.listar', compact('books'));
    }

    public function create()
    {
        return view('libro.create');
    }

    public function store(Request $request)
    {
        $book = new Book();

        $book->codigo = $request->codigo;
        $book->isbn = $request->isbn;
        $book->titulo = $request->titulo;
        $book->editorial = $request->editorial;
        $book->paginas = $request->paginas;
        $book->save();

        return redirect()->route('book.listar');
    }

    public function show(Book $book)
    {
        return view('libro.show', compact('book'));
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.listar');
    }

    public function edit(Book $book)
    {
        return view('libro.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->codigo = $request->codigo;
        $book->isbn = $request->isbn;
        $book->titulo = $request->titulo;
        $book->editorial = $request->editorial;
        $book->paginas = $request->paginas;
        $book->save();
        return redirect()->route('book.listar');
    }
}
