<?php

namespace PrageethPeiris\LaravelDynamicResponse\ResponseFormats;


use Illuminate\Database\Query\Builder;

class CSVResponse extends BaseJsonResponse
{
    public function toArray($request)
    {
        if(!$this->passedResource instanceof Builder){
            throw new \Exception("passed resource is not a query builder");
        }





    }


}