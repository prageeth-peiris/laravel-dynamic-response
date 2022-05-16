<?php

namespace Tests\Unit;


use Illuminate\Support\Facades\App;
use PrageethPeiris\LaravelDynamicResponse\RequestData\ResponseFormatDecider;
use PrageethPeiris\LaravelDynamicResponse\ResponseFormats\CSVResponse;
use PrageethPeiris\LaravelDynamicResponse\ResponseFormats\TableJsonResponse;
use PrageethPeiris\LaravelDynamicResponse\Tests\TestCase;


class ResponseFormatTest extends TestCase
{



/** @test */
public function it_picks_correct_response_format_object_according_to_request_parameter(){

  //table test
    $class_name = ResponseFormatDecider::from([
        'responseFormat' => 'table'
    ])->responseFormat;


        $object = App::makeWith($class_name,[  'resource' => collect([])]);

        $assertion = $object instanceof TableJsonResponse;

        $this->assertTrue($assertion);


        //csv test
    $class_name = ResponseFormatDecider::from([
        'responseFormat' => 'csv'
    ])->responseFormat;


    $object = App::makeWith($class_name,[  'resource' => collect([])]);

    $assertion = $object instanceof CSVResponse;

    $this->assertTrue($assertion);



}






}