<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboardAdmin',[
            "title" => "Dashboard",
            "wisatas"=>  Wisata::all(),
            "countWisata"=> Wisata::count()
        ]);
    }
}
