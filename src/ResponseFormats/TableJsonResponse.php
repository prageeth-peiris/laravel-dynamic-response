<?php

namespace PrageethPeiris\LaravelDynamicResponse\ResponseFormats;



use Illuminate\Database\Query\Builder;

class TableJsonResponse extends BaseJsonResponse
{




    public function toArray($request)
    {


        return [
            'data' => $this->passedResource->get(),
            'totalRows' => $this->passedResource->count()
        ];

    }




}