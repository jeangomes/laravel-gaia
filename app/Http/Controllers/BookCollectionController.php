<?php

namespace App\Http\Controllers;

use App\Models\BookCollection;
use Illuminate\Http\Request;

class BookCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookCollection  $bookCollection
     * @return \Illuminate\Http\Response
     */
    public function show(BookCollection $bookCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookCollection  $bookCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookCollection $bookCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookCollection  $bookCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookCollection $bookCollection)
    {
        //
    }
}
