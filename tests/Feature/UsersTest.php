<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_mengambil_data_user()
    {
        $response = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($response));
        
        $response = $this->get('api/lihat-users');
        $response->assertStatus(200);
    }

    public function test_input_data_menu_user(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->post('api/tambah-user', [
            'name' => 'paldiganteng1235',
            'email' => 'paldisuiiii5@gmail.com',
            'password' => 'paldi123'
        ]);

        $response->assertStatus(200);
        
    }

    public function test_edit_data_menu_user(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->put('api/edit-user/3', [
            'name' => 'admin21',
            'email' => 'admin2@lppm.itk.ac.id',
            'password' => 'paldijadiadmin'
        ]);

        $response->assertStatus(200);
        
    }

    public function test_delete_data_menu_user(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->delete('/api/hapus-user/25');

        $response->assertStatus(200);
        
    }
}
