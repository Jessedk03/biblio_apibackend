<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return response(['books' => Book::orderBy('created_at', 'asc')->get()], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //

        $book = Book::create([
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'isbnNumber' => $request->get('isbnNumber'),
            'userName' => $request->get('userName'),
        ]);

        return response([
            'message' => 'book successfully created',
            'book' => $book
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response(['book' => $book], 200);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update([
            'userName' => $request->get('userName'),
        ]);
        return response([
            'message' => 'Book successfully updated',
            'book' => $request->all()
        ], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
