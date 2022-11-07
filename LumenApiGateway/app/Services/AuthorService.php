<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to be used to consume the author service
     * @var string
     */
    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.authors.base_uri');
    }


    /**
     * Get full list of authors from authors service
     * @return string
     */
    public function obtainAuthors(){
        return $this->performRequest('GET', '/authors');
    }

    /**
     * Create an instance of Author from author service
     * @return string
     */
    public function createAuthor($data){
        return $this->performRequest('POST', '/author', $data);
    }

    /**
     * Obtain an specific Author from author service
     * @return string
     */
    public function obtainAuthor($author_id){
        return $this->performRequest('GET', "/author/{$author_id}");
    }



    /**
     * Edit an specific Author from author service
     * @return string
     */
    public function editAuthor($data, $author_id){
        return $this->performRequest('PUT', "/author/{$author_id}", $data);
    }



    /**
     * Delete an specific Author from author service
     * @return string
     */
    public function deleteAuthor($author_id){
        return $this->performRequest('DELETE', "/author/{$author_id}");
    }


}
