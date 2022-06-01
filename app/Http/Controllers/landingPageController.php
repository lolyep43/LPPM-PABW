<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogModel;
use App\Models\PortofolioModel;
use App\Models\anggotaModel;
use App\Models\qnaModel;
use App\Models\ContactModel;

class landingPageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function dataLanding(){
        $anggota = anggotaModel::all();
        $faq = qnaModel::all();
        $contact = ContactModel::all();
        return view('index', compact('anggota','faq','contact'));
    }
    
}
