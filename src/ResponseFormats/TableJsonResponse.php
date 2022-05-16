<?php

namespace PrageethPeiris\LaravelDynamicResponse\ResponseFormats;



use Illuminate\Database\Query\Builder;

class TableJsonResponse extends BaseJsonResponse
{




    public function toArray($request)
    {



        if(!$this->passedResource instanceof Builder){
            throw new \Exception("passed resource is not a query builder");
        }


        return [
            'data' => $this->passedResource->get(),
            'totalRows' => $this->passedResource->count()
        ];

    }




}