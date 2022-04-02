<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortofolioModel;

class DashboardController extends Controller
{
    public function index()
    {
        $portofolio = PortofolioModel::all();
        return view('admin.dashboards.index', compact('portofolio'));
    }
}
