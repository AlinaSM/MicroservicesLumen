<?php

namespace App\Service;

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
}