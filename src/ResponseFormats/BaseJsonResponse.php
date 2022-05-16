<?php

namespace PrageethPeiris\LaravelDynamicResponse\ResponseFormats;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BaseJsonResponse extends ResourceCollection
{


    public bool $preserveKeys = true;

    protected $passedResource;

    public function __construct($resource)
    {
        parent::__construct($resource);
        $this->passedResource = $resource;
    }


}