<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\anggotaModel;
use App\Models\qnaModel;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Http;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $anggota = anggotaModel::all();
        $faq = qnaModel::all();
        $contact = ContactModel::all();
        $response = Http::withHeaders([
            //api key rajaongkir
            'key'          => config('services.weatherAPI.key')
        ])->get('http://api.weatherapi.com/v1/current.json?q=Indonesia&aqi=no');

        $data = json_decode($response);
        View::share('anggota',$anggota);
        View::share('faq',$faq);
        View::share('contact',$contact);
        View::share('data',$data);
        
    }
}
