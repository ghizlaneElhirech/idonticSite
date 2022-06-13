<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\JsonResponse;
use App\Visitor;
use Illuminate\Support\Collection;

class VisitorsControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example. 
     *
     * @test
     */
    public function visitors_list_test_success()
    {
        $this->seed();
        $response = $this->get('/api/visitor');

        $response->assertOk();
        $this->assertCount(2, $response->json(['data']));
        $this->assertNotNull($response->json(['data'][0]));
       
    }
    
     /**
     * A basic feature test example.
     *
     * @test
     */
     
     public function visitor_is_created_with_success(){
        $response = $this->post('/api/visitor', [
        'full_name'=>'ghizlane elhirech',
        'email'=>'jj@jj'     ,
        'sujet'=>'hh',
        'message' => 'll',
        'type_id' =>1
        
        
        ]);
        
        
         $response->assertStatus(200);
        
     }
     
     
     /**
     * A basic feature test example.
     *
     * @test
     */
     public function visitor_has_error(){
        $response = $this->post('/api/visitor', [
        
       'full_name'=>'',
        'email'=>''     ,
        'sujet'=>'',
        'message' => '',
        'type_id' =>''
        
        ]);
       $response->assertStatus(200);
       
     }
     
    
      /**
     * A basic feature test example.
     *
     * @test
     */
      public function visitor_is_deleted_with_success(){
         $this->seed();
         $visitor = Visitor::first();
         $response = $this->delete('/api/visitor/' . $visitor->id);
         $response->assertNoContent();
         $this->assertEquals(1,Visitor::count());
         
      }
}
