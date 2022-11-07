<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponser;
use App\Services\AuthorService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        return $this->successResponse( $this->authorService->obtainAuthors() );
    }


    /**
     * Create an instance of author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        return $this->successResponse( $this->authorService->createAuthor($request->all()), Response::HTTP_CREATED);
    }


    /**
     * Return an specific author
     * @return Illuminate\Http\Response
     */
    public function show($author){
        return $this->successResponse( $this->authorService->obtainAuthor($author));
    }


    /**
     * Update the information of an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author_id){
        return $this->successResponse( $this->authorService->editAuthor($request->all(), $author_id));

    }


    /**
     * Removes an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($author_id){
        return $this->successResponse( $this->authorService->deleteAuthor($author_id) );
    }

}
