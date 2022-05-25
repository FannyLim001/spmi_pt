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

    function pt_dashboard(){
        $data = ['LoggedUserInfo'=>Pt::where('id','=', session('LoggedUser'))->first(),
                "title" => "Dashboard",];
        return view('pt.dashboard', $data);
    }

    function pt_form(){

        $pertanyaan = Pertanyaan::join('tipe_pertanyaan', 'tipe_pertanyaan.id_tipe_pertanyaan', '=', 'pertanyaans.id_tipe_pertanyaan')
                ->select('pertanyaans.*','tipe_pertanyaan.*')
                ->get();

        $jwb = Jawaban::join('pertanyaans', 'pertanyaans.id', '=', 'jawabans.id_pertanyaan')
                ->select('pertanyaans.*','jawabans.*')
                ->get();

        $data = ['LoggedUserInfo'=>Pt::where('id','=', session('LoggedUser'))->first(),
                "title" => "Form","pertanyaan" => $pertanyaan,
                "jawaban" => $jwb,];
        return view('pt.form_spmi', $data);
    }

    public function pt_edit($id){

        $pt = Pt::select('pts.*')
            ->where('id',$id)
            ->get();

            $data = ['LoggedUserInfo'=>Pt::where('id','=', session('LoggedUser'))->first(),
            "title" => "Edit Perguruan Tinggi","pt" => $pt,];
            return view('pt.edit_pt', $data);
    }
    
    public function pt_update(Request $request)
    {
        Pt::where('id', $request->id)->update([
            'lembaga' => $request->lembaga,
            'kelompok_koordinator' => $request->kelompok_koordinator,
            'npsn' => $request->npsn,
            'nama_pt' => $request->nama_pt,
            'nm_bp' => $request->nm_bp,
            'provinsi_pt' => $request->provinsi_pt,
            'jln' => $request->jln,
            'kec_pt' => $request->kec_pt,
            'kabupaten/kota' => $request->kabupaten_kota,
            'website' => $request->website,
            'no_tel' => $request->no_tel,
            'email' => $request->email,
            'password_pt' => $request->password_pt,
            'total_mhs' => $request->total_mhs,
            'total_dosen' => $request->total_dosen,
            'total_program' => $request->total_program,
            'total_publikasi' => $request->total_publikasi,
        ]);
        
        $data = ['LoggedUserInfo'=>Pt::where('id','=', session('LoggedUser'))->first(),
                "title" => "Edit Perguruan Tinggi"];
        return view('pt.dashboard', $data);
    }

    function show(Request $request){

        $rekomendasi = Jawaban::join('pertanyaans', 'jawabans.id_pertanyaan', '=', 'pertanyaans.id')->select('pertanyaans.*','jawabans.*')->get();

        $data=['LoggedUserInfo'=>Pt::where('id','=', session('LoggedUser'))->first(),"title" => "Profil SPMI",
            "nama" => $request->nama,
            "jabatan" => $request->jabatan,
            "radio" => $request->radio,
            "check" => $request->input('check'),
            "rekomendasi" => $rekomendasi,
        ];

        // dd($data);

        return view('pt.profil_spmi', $data);
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
