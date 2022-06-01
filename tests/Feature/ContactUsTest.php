<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactUsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_mengambil_data_contact()
    {
        $response = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($response));
        
        $response = $this->get('api/lihat-contact');
        $response->assertStatus(200);
    }


    public function test_edit_data_menu_contact(){
        $login = $this->postJson('api/login', [
            'email' => 'ab3@lppm.itk.ac.id',
            'password' => 'ahmad123123'
        ]);

        $this->withHeader('Authorization', 'Bearer ' . json_encode($login));

        $response = $this->put('api/edit-contact/1', [
            'nomor' => '+0813-1119-1001',
            'alamat' => 'Handil 2 Seberang Penjual Terang Bulan'
        ]);

        $response->assertStatus(200);
        
    }

}
