<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;
use App\Http\Resources\Book as BookResource;
use stdClass;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Books
        $books = Book::paginate(10);
        
        if ($books) {
            return (BookResource::collection($books))->additional([
                'status_code' => 200,
                'status' => 'success',
                ]);
        } else {
            return (BookResource::collection([]))->additional([
                'status_code' => 200,
                'status' => 'success',
                ]);
        }
        return view('index')->with('data', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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


        // dd($request);
        $book = new Book([
            'name' => $request->input('name'),
            'isbn' => $request->input('isbn'),
            'authors' => $request->input('authors'),
            'numberOfPages' => $request->input('number_of_pages'),
            'publisher' => $request->input('publisher'),
            'country' => $request->input('country'),
            'released' => $request->input('release_date'),
        ]);


        if ($book->save()) {
            return (new BookResource($book))->additional([
                'status_code' => 201,
                'status' => 'success'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get article
        $book = Book::findOrFail($id);

        // Return single article as a resource
        return (new BookResource($book))
            ->additional([
                'status_code' => 200,
                'status' => 'success',
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('edit')->with('book', $book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $name = $book->name;
        // dd($id);


        $book->id = $id;
        $book->name = $request->input('name');
        $book->isbn = $request->input('isbn');
        $book->authors = $request->input('authors');
        $book->numberOfPages = $request->input('number_of_pages');
        $book->publisher = $request->input('publisher');
        $book->country = $request->input('country');
        $book->released = $request->input('release_date');

        // dd($book);

        if ($book->save()) {
            return redirect('/');
            // dd($book);

            return (new BookResource($book))->additional([
                'status_code' => 204,
                'status' => 'success',
                'message' => 'The book ' . $name . ' was updated successfully',
            ]);
        }
        // "The book My First Book was updated successfully",
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get article
        $book = Book::findOrFail($id);
        $name = $book->name;

        if ($book->delete()) {
            return (new BookResource($book))
                ->additional([
                    'status_code' => 204,
                    'status' => 'success',
                    'message' => 'The book ' . $name . ' was deleted successfully',
                ]);
        }

        redirect('/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_front()
    {
        //Get Books
        $books = Book::paginate(10);
        return view('index')->with('data', $books);
    }
}
