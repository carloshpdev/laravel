<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();
        return view('rentals.index', compact('rentals'));
    }

    public function create()
    {

        $users = User::all();
        $books = Book::all();


        return view('rentals.create', compact('users', 'books'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'rental_date' => 'required|date',
        ]);


        $rental = new Rental($validatedData);


        $rental->save();


        return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();

        return redirect()->route('rentals.index')->with('success', 'Rental deleted successfully.');
    }

    public function edit(Rental $rental)
    {
        $users = User::all();
        $books = Book::all();

        return view('rentals.edit', compact('rental', 'users', 'books'));
    }

    public function update(Request $request, Rental $rental)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'rental_date' => 'required|date',
            'return_date' => 'nullable|date',
        ]);

        $rental->update($validatedData);

        return redirect()->route('rentals.index')->with('success', 'Rental updated successfully.');
    }
}
