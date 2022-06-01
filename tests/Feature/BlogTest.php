<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BlogTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_mengambil_data_blog()
    {
        $response = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($response));
        
        $response = $this->get('api/lihat-blogs');
        $response->assertStatus(200);
    }

    public function test_input_data_menu_blog(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->post('api/tambah-blog', [
            'judul' => 'Laravel sangat seru dan asik',
            'deskripsi' => 'Banyak hal yang dapat dilakukan dengan menggunakan laravel',
            'foto' => new \Illuminate\Http\UploadedFile(resource_path('test-gambar\images (1).jpg'))
        ]);

        $response->assertStatus(200);
        
    }

    public function test_edit_data_menu_blog(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->put('api/edit-faq/2', [
            'judul' => 'Laravel sangat seru dan asik',
            'deskripsi' => 'Banyak hal yang dapat dilakukan dengan menggunakan laravel',
            'foto' => new \Illuminate\Http\UploadedFile(resource_path('public/public/uploads/1654089673Petal.jpg'), '1654089673Petal.jpg', null, null, null, true)
        ]);

        $response->assertStatus(200);
        
    }

    public function test_delete_data_menu_blog(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->delete('/api/hapus-blog/3');

        $response->assertStatus(200);
        
    } 
}
