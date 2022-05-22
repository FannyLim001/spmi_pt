<?php

namespace App\Http\Controllers;

use App\Models\Pt;
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
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/');

            }else{
                return back()->with('loginError','Password Salah');
            }
        }
    }

    function pt_dashboard(){
        $data = ['LoggedUserInfo'=>Pt::where('id','=', session('LoggedUser'))->first()];
        return view('pt.dashboard', $data);
    }

    // public function authenticate_pt(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'npsn' => ['required'],
    //         'password' => ['required','min:6','max:12'],
    //     ]);

    //     if (Auth::guard('web')->attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/');
    //     }

    //     return back()->with('loginError','Login Gagal!');
    // }

    // public function logout_pt(Request $request)
    // {
    //     Auth::logout();
    
    //     $request->session()->invalidate();
    
    //     $request->session()->regenerateToken();
    
    //     return redirect('/');
    // }


    // public function authenticate_admin(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email:dns'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/admin/dashboard');
    //     }

    //     return back()->with('loginError','Login Gagal!');
    // }

    // public function logout_admin(Request $request)
    // {
    //     Auth::logout();
    
    //     $request->session()->invalidate();
    
    //     $request->session()->regenerateToken();
    
    //     return redirect('admin/dashboard');
    // }
}
