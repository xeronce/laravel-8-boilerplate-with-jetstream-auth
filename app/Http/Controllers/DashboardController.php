<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboardData(Request $request){
        $data = [];
        return view('dashboard', ['data'=> $data]);
    }
}
