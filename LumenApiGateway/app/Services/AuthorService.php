<?php

namespace App\Service;

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
}