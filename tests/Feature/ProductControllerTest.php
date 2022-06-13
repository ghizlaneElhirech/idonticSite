<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\JsonResponse;
use App\Product;
use Illuminate\Support\Collection;

class ProductControllerTest extends TestCase
{
     use RefreshDatabase;
    /**
     * A basic feature test example. 
     *
     * @test
     */
    public function verify_list_of_product_api()
    {
        $this->seed();
        $response = $this->get('/api/product');

        $response->assertOk();
        $this->assertCount(2, $response->json(['data']));
        $this->assertNotNull($response->json(['data'][0]));
       
    }
    
     /**
     * A basic feature test example.
     *
     * @test
     */
     
     public function verify_if_product_is_created_api(){
        $this->seed();
        $response = $this->post('/api/product', [
        
        'title'=>'title 1',
        'image'=>'product1.png'     
        
        
        
        ]);
        $products = Product :: all();
        $Product =  Product ::first();
        
           $response->assertStatus(201)->json('created');
            
        
     }
     
     
     /**
     * A basic feature test example.
     *
     * @test
     */
     public function product_has_error_api(){
        
        $response = $this->post('/api/product', [
        
        'title'=>'',
        'image'=>''     
        
        ]);
       $response->assertStatus(400)->json('error');
     }
     
 
     
      /**
     * A basic feature test example.
     *
     * @test
     */
      public function product_is_deleted_api(){
         $this->seed();
         $product = Product::first();
         $response = $this->delete('/api/product/' . $product->id);
         $response->assertNoContent();
         $this->assertEquals(1,Product::count());
         
      }
      
}
