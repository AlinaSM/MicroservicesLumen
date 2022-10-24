<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponser;
use App\Service\AuthorService;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the author service
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }
    
    
    /**
     * Returns authors list
     * @return Illuminate\Http\Response 
     */
    public function index(){
        
    }

    
    /**
     * Create an instance of author 
     * @return Illuminate\Http\Response 
     */
    public function store(Request $request){

    }

    
    /**
     * Return an specific author 
     * @return Illuminate\Http\Response 
     */
    public function show($author){
        
    }    

    
    /**
     * Update the information of an existing author 
     * @return Illuminate\Http\Response 
     */
    public function update(Request $request, $author_id){
        
    }

    
    /**
     * Removes an existing author 
     * @return Illuminate\Http\Response 
     */
    public function destroy($author_id){
        
    }

}
