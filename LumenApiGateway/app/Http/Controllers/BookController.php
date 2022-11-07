<?php

namespace App\Http\Controllers;
use App\Services\BookService;
use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the book service
     */
    public $bookService;


    /**
     * The service to consume the author service
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService, AuthorService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }


    /**
     * Returns books list
     * @return Illuminate\Http\Response
     */
    public function index(){
        return $this->successResponse( $this->bookService->obtainBooks() );
    }


    /**
     * Create an instance of book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->authorService->obtainAuthor($request->author_id);
        return $this->successResponse( $this->bookService->createBook($request->all()), Response::HTTP_CREATED);
    }


    /**
     * Return an specific book
     * @return Illuminate\Http\Response
     */
    public function show($book){
        return $this->successResponse( $this->bookService->obtainBook($book));
    }


    /**
     * Update the information of an existing book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book_id){
        return $this->successResponse( $this->bookService->editBook($request->all(), $book_id));

    }


    /**
     * Removes an existing book
     * @return Illuminate\Http\Response
     */
    public function destroy($book_id){
        return $this->successResponse( $this->bookService->deleteBook($book_id) );
    }
}
