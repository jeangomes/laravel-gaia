<?php

namespace App\Http\Controllers;

use App\Filters\BookFilters;
use App\Http\Resources\BookCollection;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param BookFilters $bookFilters
     * @return BookCollection
     */
    public function index(BookFilters $bookFilters)
    {
        //dd($bookFilters);
        return new BookCollection(Book::with('author:name,id')
            ->filter($bookFilters)
            ->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->input('title');
        $book->author_id = $request->author_id['value'];
        $book->origin = $request->origin;
        $book->img_cover = '-';
        $book->obs = '-';
        $book->ebook = $request->ebook;
        $book->is_read = $request->is_read;
        $book->is_read = $request->is_read;
        $book->price = str_replace(',', '.', $request->price);
        $book->purchase_date = Carbon::createFromFormat('d/m/Y', $request->purchase_date);
        $book->page_number = $request->input('page_number');
        $book->save();
        return new BookResource($book->load('author:name,id'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
