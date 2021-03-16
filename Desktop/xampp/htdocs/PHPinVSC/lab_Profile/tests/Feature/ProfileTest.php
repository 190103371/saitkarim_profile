<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ProfileTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */
  

    public function test_get_post_id(){
        $response =  $this->get('/post/13');
        $response -> assertStatus(200);
    }
    
    public function test_get_post_response(){
        $response1 =  $this->get('/post/13');
        $response1 -> assertViewHas('post');
    }
    public function test_directory(){
        $this-> assertDirectoryDoesNotExist('C:/Users/User/Desktop/xampp/htdocs
        /PHPinVSC/lab_Profile/resources/views/Blog');
    }
    


}
