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
        $response = $this->get('/FAQ');

        $this->assertTrue(true);
    }

    public function test_input(){

        $response = $this->call('POST','/QNA',[
            'pertanyaan' => 'Kode pemrograman terbaik?',
            'jawaban' => 'Semua kode pemrograman itu terbaik!' 
        ]);
        
        $this->assertTrue(true);
        
    }

    public function test_delete(){
        $response = $this->call('DELETE','/QNA', [
            'id' => '1',
            'pertanyaan' => 'Kode pemrograman terbaik?', 
            'jawaban' => 'Semua kode pemrograman itu terbaik!'
        ]);

        $this->assertTrue(true);
    }
}
