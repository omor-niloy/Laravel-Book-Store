<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;

class BookController extends Controller
{
    //
    public function addBook()
    {
        return view('book.add_book');
    }
    public function saveBook(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|integer|max:98766688757575765435',
            'available' => 'required|integer|max:100000',
        ]);
        $book = Book::create($validateData);
        return redirect()->route('add_successfully')->with('success', 'Book created successfully');
    }
    public function printMsg(){
        return view('book.add_successfully');
    }

    public function deleteBook($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('home');
    }
    public function updateBook($id){
        $book = Book::find($id);
        return view('book.update_book', compact('book'));
    }
    public function saveUpdate($id, Request $request){
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|integer|max:98766688757575765435',
            'available' => 'required|integer|max:100000',
        ]);
        $book = Book::find($id);
        $book->update($validateData);
        return redirect()->route('add_successfully')->with('success', 'Book updated Successfully');
    }

    public function viewBook($id){
        $book = Book::find($id);
        return view('book.view_book', compact('book'));
    }
}
