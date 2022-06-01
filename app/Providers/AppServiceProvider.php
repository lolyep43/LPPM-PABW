<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\anggotaModel;
use App\Models\qnaModel;
use App\Models\ContactModel;

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
        View::share('anggota',$anggota);
        View::share('faq',$faq);
        View::share('contact',$contact);
        
    }
}
