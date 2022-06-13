<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\JsonResponse;
use App\Question;
use Illuminate\Support\Collection;
use Tests\Feature\Session;

class QuestionsControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example. 
     *
     * @test
     */
    public function verify_list_of_question_api()
    {
        $this->seed();
        $response = $this->get('/api/question');

        $response->assertOk();
        $this->assertCount(2, $response->json(['data']));
        $this->assertNotNull($response->json(['data'][0]));
       
    }
    
     /**
     * A basic feature test example.
     *
     * @test
     */
     
     public function verify_if_Qusetion_is_created_api(){
        $this->seed();
        $response = $this->post('/api/question', [
        
        'question'=>'what is a 3D smart factory ?',
        'reply'=>'a start up'     
        
        
        
        ]);
        $questions = Question :: all();
        $question =  Question ::first();
        
           $response->assertStatus(201)->json('created');
            
        
     }
     
     
     /**
     * A basic feature test example.
     *
     * @test
     */
     public function question_has_error_api(){
        
        $response = $this->post('/api/question', [
        
        'question'=>'',
        'reply'=>''     
        
        ]);
       $response->assertStatus(400)->json('error');
     }
     
      /**
     * A basic feature test example.
     *
     * @test
     */
      public function question_is_updated_api(){
         $this->seed();
         $question = Question::first();
         $response = $this->put('/api/question/' . $question->id, [
        
            'question'=>'question updated',
            'reply'=>'reply updated'
            
            
        
        
        ]);
         $updatedQuestion = Question::find($question->id);  
         $response->assertOk();
         $this->assertEquals('question updated', $updatedQuestion->question);
         
      }
     
      /**
     * A basic feature test example.
     *
     * @test
     */
      public function question_is_deleted_api(){
         $this->seed();
         $question = Question::first();
         $response = $this->delete('/api/question/' . $question->id);
         $response->assertNoContent();
         $this->assertEquals(1,Question::count());
         
      }
      
      

}
