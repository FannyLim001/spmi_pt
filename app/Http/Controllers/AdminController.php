<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Carbon\Carbon;
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
            'title' => 'Dashboard',
        ];

        $month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sept","Oct","Nov","Dec"];

        $user = [];
        foreach ($month as $key => $value) {
            $user[] = Form::where(DB::raw("DATE_FORMAT(created_at, '%b')"),$value)->count();
        }

    	return view('admin.dashboard_admin', $data)->with('month',json_encode($month,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }
}
