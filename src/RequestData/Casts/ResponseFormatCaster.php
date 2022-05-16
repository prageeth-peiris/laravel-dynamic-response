<?php

namespace PrageethPeiris\LaravelDynamicResponse\RequestData\Casts;

use PrageethPeiris\LaravelDynamicResponse\RequestData\Casts\enums\ResponseFormatEnum;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\DataProperty;

class ResponseFormatCaster implements  Cast
{
    public function cast(DataProperty $property, mixed $value): mixed
    {

        return ResponseFormatEnum::from($value)->format();

    }


}