<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\Pt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    function index(){
        
        $pt = Pt::where('id','=', session('LoggedUser'))->first();

        $pertanyaan = Pertanyaan::join('tipe_pertanyaan', 'tipe_pertanyaan.id_tipe', '=', 'pertanyaans.id_tipe')
                ->select('pertanyaans.*','tipe_pertanyaan.*')
                ->get();

        $jwb = Jawaban::join('pertanyaans', 'pertanyaans.id', '=', 'jawabans.id_pertanyaan')
                ->select('pertanyaans.*','jawabans.*')
                ->get();

        $form = DB::table('form')->where('id_pt','=',$pt->id)->get();

        $data = ['LoggedUserInfo'=>Pt::where('id','=', session('LoggedUser'))->first(),
                "title" => "Form","pertanyaan" => $pertanyaan,
                "jawaban" => $jwb,"form" => $form];

        $is_present = DB::table('form')->where('id_pt','=',$pt->id)->count();

        if($is_present > 0){
            return view('pt.profil_spmi', $data); 
        } else if($is_present <= 0){
            return view('pt.form_spmi', $data);
        }
    }

    public function all(){

        $form = Form::join('pts', 'pts.id', '=', 'form.id_pt')
        ->select('form.*','nama_pt')
        ->get();

        return view('admin/form/riwayat_jawaban',
        [
            "title"=>"Data Riwayat Jawaban",
            "form" => $form,
        ]);
    }

    function result(Request $request){
        $rekomendasi = Jawaban::join('pertanyaans', 'jawabans.id_pertanyaan', '=', 'pertanyaans.id')->select('jawabans.*')->get();

        $pt = Pt::where('id','=', session('LoggedUser'))->first();

        $rd = $request->radio;
        $ck = $request->check;
        $hasil1 = implode(", ", $rd);
        $hasil2 = implode(", ", $ck);

        $rekom = "";
        foreach ($rd as $j){
                foreach ($rekomendasi as $r){
                    if ($r->jawaban === $j){
                        $rekom .= $r->rekomendasi.'. ';
                    }
                }
        }
            foreach ($rekomendasi as $r){
                foreach ($ck as $c){
                    if ($r->jawaban === $c){
                        $rekom .= $r->rekomendasi.'. ';
                    }
                }
            }

        Form::insertGetId([
            'id_pt' => $pt->id,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'hasil' => $hasil1.'. '.$hasil2,
            'rekomendasi' => $rekom,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
        ]);

        $form = DB::table('form')->where('id_pt','=',$pt->id)->get();

        $data = ['LoggedUserInfo'=>Pt::where('id','=', session('LoggedUser'))->first(),
                "title" => "Form", "form" => $form];

        return view('pt.profil_spmi', $data);
    }
}
