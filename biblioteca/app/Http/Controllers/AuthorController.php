<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.createAuthor');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_create_author' => 'required|string|max:255',
            'surname_create_author' => 'required|string|max:255',
            'nationality_create_author' => 'required|string|max:255',
            'gender_create_author' => 'required|string|max:255',
            'age_create_author' => 'required',
        ]);

        $author = new Author();
        $author->name = $validatedData['name_create_author'];
        $author->surname = $validatedData['surname_create_author'];
        $author->nationality = $validatedData['nationality_create_author'];
        $author->gender = $validatedData['gender_create_author'];
        $author->age = $validatedData['age_create_author'];
        $author->save();

        return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }


    public function edit(Author $author)
    {
        return view('authors\updateAuthor', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'age' => 'required|string|max:255',
        ]);

        $author->update($validatedData);

        return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Autor eliminado exitosamente.');
    }
}
