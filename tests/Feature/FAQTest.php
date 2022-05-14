<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\qnaModel;
use Tests\TestCase;

class FAQTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_masuk_ke_dalam_menu_qna()
    {
        $login = $this->post('/login', [
            'email' => 'admin@lppm.itk.ac.id',
            'password' => 'ahmad123123',
        ]);

        $this->assertAuthenticated();

        $response = $this->get('/QNA');
        $response->assertStatus(200);
    }

    public function test_input_data_menu_qna(){

        $login = $this->post('/login', [
            'email' => 'admin@lppm.itk.ac.id',
            'password' => 'ahmad123123',
        ]);

        $this->assertAuthenticated();

        $response = $this->post('/QNA', [
            'pertanyaan' => 'Sudah berapa udin mengenal anda?',
            'jawaban' => 'Gak tahu juga ga'
        ]);

        $response->assertStatus(302);
        
    }

    public function test_edit_data_menu_qna(){

        $login = $this->post('/login', [
            'email' => 'admin@lppm.itk.ac.id',
            'password' => 'ahmad123123',
        ]);

        $this->assertAuthenticated();

        $response = $this->put(route('QNA.update', 12), [
            'pertanyaan' => 'Sudah berapa lama perusahaan ini di kenal orang banyak?',
            'jawaban' => 'Gak tahu juga gan'
        ]);

        $response->assertStatus(302);
        
    }

    public function test_delete_data_menu_qna(){

        $login = $this->post('/login', [
            'email' => 'admin@lppm.itk.ac.id',
            'password' => 'ahmad123123',
        ]);

        $this->assertAuthenticated();

        $response = $this->delete(route('QNA.destroy', 17));

        $response->assertStatus(302);
        
    } 


}

