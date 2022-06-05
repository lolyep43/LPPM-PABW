<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


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
        
        $response = $this->get('api/lihat-portofolios');
        $response->assertStatus(200);
    }

    public function test_input_data_menu_portofolio(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        Storage::fake('local');
        $foto = UploadedFile::fake()->create('foto.jpg');

        $response = $this->post('api/tambah-portofolio', [
            'jenis' => 'ARP',
            'judul' => 'Gusti Company',
            'problem' => 'Overthinking',
            'solusi' => 'Minum Kopi',
            'fitur' => 'kopi sachet',
            'metode' => 'Seduh pake air ledeng',
            'foto' => $foto
        ]);

        $response->assertStatus(200);
        
    }

    public function test_edit_data_menu_portofolio(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        Storage::fake('local');
        $foto = UploadedFile::fake()->create('hebat.jpg');

        $response = $this->put('api/edit-portofolio/6', [
            'jenis' => 'ARP',
            'judul' => 'Gusti Company',
            'problem' => 'Overthinking',
            'solusi' => 'Minum Kopi',
            'fitur' => 'kopi sachet',
            'metode' => 'Seduh pake air ledeng',
            'foto' => $foto
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
