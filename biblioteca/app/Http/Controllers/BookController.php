<?php

namespace App\Http\Controllers;

use App\Models\Author;
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

    public function create()
    {
        $authors = Author::all();

        if ($authors->isEmpty()) {
            return redirect()
                ->route('books.index')
                ->with('warning', 'No authors found, please create an author first.');
        }

        return view('createBook', compact('authors'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title_create_book' => 'required|string|max:255',
            'category_create_book' => 'required|string|max:255',
            'author_id_create_book' => 'required|exists:authors,id',
        ]);


        $book = new Book();
        $book->title = $validatedData['title_create_book'];
        $book->category = $validatedData['category_create_book'];
        $book->id_author = $validatedData['author_id_create_book'];
        $book->save();

        return redirect()->route('books.create')->with('success', 'Book created successfully.');
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('edit', ['book' => $book, 'authors' => $authors]);
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title_update_book' => 'required|string|max:255',
            'category_update_book' => 'required|string|max:255',
            'author_id_update_book' => 'required|exists:authors,id',
        ]);

        $book->update([
            'title' => $validatedData['title_update_book'],
            'category' => $validatedData['category_update_book'],
            'id_author' => $validatedData['author_id_update_book'],
        ]);

        return redirect()->route('books.getBooks')->with('success', 'Book updated successfully.');
    }
}
