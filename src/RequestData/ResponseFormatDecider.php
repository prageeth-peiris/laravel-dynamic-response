<?php

namespace PrageethPeiris\LaravelDynamicResponse\RequestData;


use PrageethPeiris\LaravelDynamicResponse\RequestData\Casts\ResponseFormatCaster;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

class ResponseFormatDecider extends Data
{


    public function __construct(

        #[Required, StringType, withCast(ResponseFormatCaster::class)]
        public string $responseFormat

    )
    {
    }
}