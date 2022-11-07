<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    /**
     * The base uri to be used to consume the book service
     * @var string
     */
    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.books.base_uri');
    }

    /**
     * Get full list of books from books service
     * @return string
     */
    public function obtainBooks(){
        return $this->performRequest('GET', '/books');
    }

    /**
     * Create an instance of Book from book service
     * @return string
     */
    public function createBook($data){
        return $this->performRequest('POST', '/book', $data);
    }

    /**
     * Obtain an specific Book from book service
     * @return string
     */
    public function obtainBook($book_id){
        return $this->performRequest('GET', "/book/{$book_id}");
    }

    /**
     * Edit an specific Book from book service
     * @return string
     */
    public function editBook($data, $book_id){
        return $this->performRequest('PUT', "/book/{$book_id}", $data);
    }

    /**
     * Delete an specific Book from book service
     * @return string
     */
    public function deleteBook($book_id){
        return $this->performRequest('DELETE', "/book/{$book_id}");
    }

}
