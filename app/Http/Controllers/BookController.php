<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookFormRequest;
use App\Models\Book;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderByDesc('created_at')->paginate(10);
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = null;
        return view('book.form', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookFormRequest $request)
    {
        $validated = $request->validated();

        $book = Book::create($validated);
        if ($book) {
            return redirect()->route('books.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.detail', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.form', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookFormRequest $request, Book $book)
    {
        $validated = $request->validate();

        dd($validated);

        $book->title = $validated['title'];
        $book->firstname = $validated['firstname'];
        $book->lastname = $validated['lastname'];
        $book->pages = $validated['pages'];
        $book->price = $validated['price'];

        // dd($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
