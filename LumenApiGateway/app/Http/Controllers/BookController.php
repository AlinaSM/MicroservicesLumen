<?php

namespace App\Http\Controllers;
use App\Service\BookService;
use App\Traits\ApiResponser;

class BookController extends Controller
{
    use ApiResponser;
    
    /**
     * The service to consume the book service
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    
    /**
     * Returns books list
     * @return Illuminate\Http\Response 
     */
    public function index(){
        
    }

    
    /**
     * Create an instance of book 
     * @return Illuminate\Http\Response 
     */
    public function store(Request $request){
        
    }

    
    /**
     * Return an specific book 
     * @return Illuminate\Http\Response 
     */
    public function show($book){
        
    }    

    
    /**
     * Update the information of an existing book 
     * @return Illuminate\Http\Response 
     */
    public function update(Request $request, $book_id){
        
    }

    
    /**
     * Removes an existing book 
     * @return Illuminate\Http\Response 
     */
    public function destroy($book_id){
        
    }
}
