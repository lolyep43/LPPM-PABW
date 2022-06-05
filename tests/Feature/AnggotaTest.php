<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AnggotaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_mengambil_data_anggota()
    {
        $response = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($response));
        
        $response = $this->get('api/lihat-anggotas');
        $response->assertStatus(200);
    }

    public function test_input_data_menu_anggota(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        Storage::fake('local');
        $foto = UploadedFile::fake()->create('foto.jpg');

        $response = $this->post('api/tambah-anggota', [
            'jabatan' => 'Laravel sangat seru dan asik',
            'nama' => 'Banyak hal yang dapat dilakukan dengan menggunakan laravel',
            'foto' => $foto
        ]);

        $response->assertStatus(200);
        
    }

    public function test_edit_data_menu_anggota(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        Storage::fake('local');
        $foto = UploadedFile::fake()->create('hebat.jpg');

        $response = $this->put('api/edit-anggota/7', [
            'jabatan' => 'Laravel keren',
            'nama' => 'menggunakan laravel seru',
            'foto' => $foto
        ]);

        $response->assertStatus(200);
        
    }

    public function test_delete_data_menu_anggota(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->delete('/api/hapus-anggota/17');

        $response->assertStatus(200);
        
    }
}
