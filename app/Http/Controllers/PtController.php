<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pt;

class PtController extends Controller
{
    public function index(){

        return view('admin/pt/data_pt',
        [
            "title"=>"Data Perguruan Tinggi",
            "pt" => Pt::all()
        ]);
    }


    // pt
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

        if (isset($request->submit)) 
        {
            
        }
        return view('pt.profil_spmi', $data);
    }

    // admin
    public function add(){
        
        return view('admin/pt/tambah_pt', [
            "title" => "Tambah Perguruan Tinggi",
            "pt" => Pt::all(),
        ]);
    }

    public function store(Request $request)
    {
        Pt::insertGetId([
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
        ]);
        
        return redirect('perguruantinggi')->with('success', 'Data berhasil ditambahkan!');
    }

    public function admin_edit($id){

        $pt = Pt::select('pts.*')
            ->where('id',$id)
            ->get();

        return view('admin/pt/edit_pt',
        [
            "title"=>"Edit Perguruan Tinggi",
            "pt" => $pt,
        ]);
    }

    public function update(Request $request)
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
        
        return redirect('perguruantinggi')->with('success', 'Data berhasil diubah!');
    }

    public function hapus($id)
    {
        Pt::where('id', $id)->delete();

        return redirect('perguruantinggi')->with('success', 'Data berhasil dihapus!');
    }

}
