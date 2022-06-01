<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PortofolioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_mengambil_data_portofolio()
    {
        $response = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($response));
        
        $response = $this->get('api/lihat-portofolio');
        $response->assertStatus(200);
    }

    public function test_input_data_menu_portofolio(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->post('api/tambah-portofolio', [
            'problem' => 'Overthinking',
            'solusi' => 'Minum Kopi',
            'fitur' => 'kopi sachet',
            'metode' => 'Seduh pake air ledeng',
            'foto' => new \Illuminate\Http\UploadedFile(resource_path('test-gambar\images (1).jpg'))
        ]);

        $response->assertStatus(200);
        
    }

    public function test_edit_data_menu_portofolio(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->put('api/edit-portofolio/2', [
            'problem' => 'Overthinking',
            'solusi' => 'Minum Kopi',
            'fitur' => 'kopi sachet',
            'metode' => 'Seduh pake air ledeng',
            'foto' => new \Illuminate\Http\UploadedFile(resource_path('test-gambar\images (1).jpg'))
        ]);

        $response->assertStatus(200);
        
    }

    public function test_delete_data_menu_portofolio(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->delete('/api/hapus-portofolio/3');

        $response->assertStatus(200);
        
    }
}
