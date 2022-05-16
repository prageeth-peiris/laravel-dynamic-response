<?php

namespace PrageethPeiris\LaravelDynamicResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PrageethPeiris\LaravelDynamicResponse\RequestData\ResponseFormatDecider;


class LaravelDynamicResponse
{


    public function send($queryBuilder){

         $responseFormatInstanceClass =   ResponseFormatDecider::from(request()->all())->responseFormat;

         return  App::makeWith($responseFormatInstanceClass,[ 'resource' =>  $queryBuilder]);


    }






}
