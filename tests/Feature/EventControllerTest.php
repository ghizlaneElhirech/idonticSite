<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\JsonResponse;
use App\Models\Even;
use Illuminate\Support\Collection; 
use Tests\Feature\Session;

class EventControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example. 
     *
     * @test
     */
    public function verify_list_of_event_api()
    {
        $this->seed();
        $response = $this->get('/api/event');

        $response->assertOk();
        $this->assertCount(2, $response->json(['data']));
        $this->assertNotNull($response->json(['data'][0]));
       
    }
    
     /**
     * A basic feature test example.
     *
     * @test
     */
     
     public function verify_if_Event_is_created_api(){
        $this->seed();
        $response = $this->post('/api/event', [
        
        'title'=>'meeting',
        'start'=>'2022-06-10 12:00:00'  ,
        'end' =>'2022-06-11 11:00:00'   
        
        
        
        ]);
        $events = Even :: all();
        $event =  Even ::first();
        
           $response->assertStatus(201)->json('created');
            
        
     }
     
 
     
      /**
     * A basic feature test example.
     *
     * @test
     */
      public function event_is_updated_api(){
         $this->seed();
         $event = Even::first();
         $response = $this->put('/api/event/' . $event->id, [
        
             'title'=>'meeting updated',
             'start'=>'2022-06-10 12:00:00'  ,
              'end' =>'2022-06-11 11:00:00' 
        
        
        ]);
         $updatedEvent = Even::find($event->id);  
         $response->assertOk();
         $this->assertEquals('meeting updated', $updatedEvent->title);
         
      }
     
      /**
     * A basic feature test example.
     *
     * @test
     */
      public function event_is_deleted_api(){
         $this->seed();
         $event = Even::first();
         $response = $this->delete('/api/event/' . $event->id);
         $response->assertNoContent();
         $this->assertEquals(1,Even::count());
         
      }
      
}
