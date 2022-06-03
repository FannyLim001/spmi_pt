<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\Pt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function pt(){
        return view('pt/login_pt');
    }

    public function admin(){
        return view('admin/auth/login_admin');
    }

    function check_pt(Request $request){
        //Validate requests
        $request->validate([
             'npsn'=>'required',
             'password'=>'required|min:6|max:12'
        ]);

        $userInfo = Pt::where('npsn','=', $request->npsn)->first();
        if(!$userInfo){
            return back()->with('loginError','Kode PT Tidak terdeteksi');
        }else{
            $request->session()->put('LoggedUser', $userInfo->id);
            // check password
            if($request->password === $userInfo->password_pt){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/');

            }else{
                
                echo $request->password == $userInfo->password_pt;
                return back()->with('loginError','Password Salah');
            }
        }
    }

    public function logout_pt(Request $request)
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }

    function check_admin(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required'
        ]);

        $userInfo = User::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('loginError','Email Tidak terdeteksi');
        }else{
            // check password
            
            if($request->password === $userInfo->password){
                $request->session()->put('LoggedAdmin', $userInfo->id);
                return redirect('/admin/dashboard');

            }else{
                return back()->with('loginError','Password Salah');
            }
        }
    }

    public function logout_admin(Request $request)
    {
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return redirect('/admin/login');
        }
    }
}
