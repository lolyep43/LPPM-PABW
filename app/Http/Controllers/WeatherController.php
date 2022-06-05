<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(){
        $response = Http::withHeaders([
            //api key rajaongkir
            'key'          => config('services.weatherAPI.key')
        ])->get('http://api.weatherapi.com/v1/current.json?q=Indonesia&aqi=no');

        $data = json_decode($response);

        return view('components.weather-card', compact('data'));
    }
    
}
