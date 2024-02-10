<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getBooks()
    {
        $books = Book::with('authors')->get();
        return view('/books', compact('books'));
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.getBooks')->with('success', 'Book deleted successfully.');
    }
}
