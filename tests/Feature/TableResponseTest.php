<?php

namespace Tests\Feature;




use Illuminate\Support\Facades\Route;
use PrageethPeiris\LaravelDynamicResponse\LaravelDynamicResponseFacade;
use PrageethPeiris\LaravelDynamicResponse\Tests\DummyModel;
use PrageethPeiris\LaravelDynamicResponse\Tests\TestCase;

class TableResponseTest extends TestCase
{
    public  function setUp() : void
    {
        parent::setUp();



        $mock = \Mockery::mock(DummyModel::class)->makePartial();
        $mock->shouldReceive('get')->andReturn(collect( [
            [
                'name' => 'a'
            ],

            [

                'name' => 'b'
            ]

        ]));
        $mock->shouldReceive('count')->andReturn(5);
        $mock->shouldReceive('toBase')->andReturn(null);

        Route::get('/test-dummy',function() use ($mock){

                return LaravelDynamicResponseFacade::send($mock);

        });


    }


    /** @test */
 public function it_gives_correct_table_response_for_route_endpoints(){


        $result = $this->getJson('/test-dummy?responseFormat=table');

        $result->assertStatus(200);

        $result->assertJson([

            'data' => [
                [
                    'name' => 'a'
                ],

                [

                    'name' => 'b'
                ]

            ],

            'totalRows' => 5


        ]);


 }




}