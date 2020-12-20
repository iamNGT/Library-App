<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index(lain $lain)
    {
        $books = Books::paginate(10);
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6',
            'author' => 'required|min: 5',
            'editor' => 'required|min: 5',
            'lang_book' => 'required|min: 5',
            'description' => 'required|min: 50',
            'nbr_copy' => 'required|numeric',
        ]);

        $book = Books::create($request->all());
        return redirect(route('book.edit',$book));
    }

    /**
     * Display the specified resource.
     *
     *
     * @param  Books $book
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @param  Books $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param  Books $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        $book->update($request->all());
        return redirect(route('book.edit',$book));
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @param  Books $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return redirect(route('book.index'));
    }
}
