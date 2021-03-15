<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /*public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/


    public function test_get_post_id(){
        $response =  $this->get('/post/5');
        $response -> assertStatus(200);
    }
    
    public function test_get_post_response(){
        $response1 =  $this->get('/post/5');
        $response1 -> assertViewHas('post');
    }
    /*public function test_asserting_an_exact_json_match(){
        $response2 = $this->json('POST', '/post', ['title' => 'About']);

        $response2 -> assertLocation([
            'created' => true,
        ]);
    }*/
    


}
