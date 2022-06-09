<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function admin_dashboard(){
        $data = [
            'total_pt' => DB::table('pts')->count(),
            'total_pertanyaan' => DB::table('pertanyaans')->count(),
            'Total_jwb'=> DB::table('form')->count(),
            'Total_kategori'=> DB::table('kategori_pertanyaan')->count(),
            'title' => 'dashboard',
        ];

        return view('admin.dashboard_admin', $data);
    }
}
