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
    public function test_mengambil_data_faq()
    {
        $response = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($response));
        
        $response = $this->get('api/lihat-faqs');
        $response->assertStatus(200);
    }

    public function test_input_data_menu_qna(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->post('api/tambah-faq', [
            'pertanyaan' => 'Sudah berapa udin mengenal anda?',
            'jawaban' => 'Gak tahu juga ga'
        ]);

        $response->assertStatus(200);
        
    }

    public function test_edit_data_menu_qna(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->put('api/edit-faq/2', [
            'pertanyaan' => 'Sudah berapa lama perusahaan ini di kenal orang banyak?',
            'jawaban' => 'Gak tahu juga gan'
        ]);

        $response->assertStatus(200);
        
    }

    public function test_delete_data_menu_qna(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->delete('/api/hapus-faq/25');

        $response->assertStatus(200);
        
    } 


}

