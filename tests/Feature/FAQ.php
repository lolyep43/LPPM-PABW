<?php

namespace Tests\Unit;

use Tests\TestCase;

class FAQ extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    
    public function test_get()
    {
        $response = $this->get('/QNA');

        $response->assertStatus(200);
    }

    public function test_input(){

        $response = $this->call('POST','/QNA',[
            'pertanyaan' => 'Kode pemrograman terbaik?',
            'jawaban' => 'Semua kode pemrograman itu terbaik!' 
        ]);
        
        $response->assertStatus(200);
        
    }

    public function test_edit(){
        $response = $this->call('PUT', '/QNA', [
            'id' => '1',
            'pertanyaan' => 'Kode pemrograman terburuk?', 
            'jawaban' => 'Semua kode pemrograman itu terbaik!'
        ]);

        $response->assertStatus(200);
    }

    public function test_delete(){
        $response = $this->call('DELETE','/QNA', [
            'id' => '1',
            'pertanyaan' => 'Kode pemrograman terbaik?', 
            'jawaban' => 'Semua kode pemrograman itu terbaik!'
        ]);

        $response->assertStatus(200);
    }
}
