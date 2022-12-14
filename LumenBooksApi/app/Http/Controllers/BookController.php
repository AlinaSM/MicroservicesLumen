<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Models\Book;

class BookController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Returns books list
     * @return Illuminate\Http\Response
     */
    public function index(){
        $books = Book::all();

        return $this->successResponse($books);
    }


    /**
     * Create an instance of book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1',
        ];

        $this->validate($request, $rules);

        $book = Book::create($request->all());

        return $this->successResponse($book, Response::HTTP_CREATED);
    }



    /**
     * Return an specific book
     * @return Illuminate\Http\Response
     */
    public function show($book){
        $book = Book::findOrFail($book);

        return $this->successResponse($book, Response::HTTP_OK);
    }


    /**
     * Update the information of an existing book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book_id){

        $rules = [
            'title' => 'max:255',
            'description' => 'max:255',
            'price' => 'min:1',
            'author_id' => 'min:1',
        ];

        $this->validate($request, $rules);

        $book = Book::findOrFail($book_id);

        $book->fill($request->all());

        if($book->isClean()){
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $book->save();

        return $this->successResponse($book);
    }




    /**
     * Removes an existing book
     * @return Illuminate\Http\Response
     */
    public function destroy($book_id){
        $book = Book::findOrFail($book_id);
        $book->delete();
        return $this->successResponse($book);

    }
}
