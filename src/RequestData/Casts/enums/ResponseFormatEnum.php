<?php

namespace PrageethPeiris\LaravelDynamicResponse\RequestData\Casts\enums;

use PrageethPeiris\LaravelDynamicResponse\ResponseFormats\CSVResponse;
use PrageethPeiris\LaravelDynamicResponse\ResponseFormats\TableJsonResponse;

enum  ResponseFormatEnum : string
{

    case TABLE = 'table';
    case CSV = 'csv';
    case CHART = 'chart';

    public function format(){
        return match($this)
        {
            self::TABLE   => TableJsonResponse::class,
            self::CSV     => CSVResponse::class,
        };
    }



}