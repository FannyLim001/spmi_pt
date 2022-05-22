<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index(){

        $pertanyaan = Pertanyaan::join('kategori_pertanyaan', 'kategori_pertanyaan.id_kategori', '=', 'pertanyaans.id_kategori')
            ->select('pertanyaans.*','kategori_pertanyaan.*')
            ->get();

        return view('admin/pertanyaan/pertanyaan_admin',
        [
            "title"=>"Data Pertanyaan",
            "pertanyaan" => $pertanyaan,
        ]);
    }

    public function add(){
        $kat = DB::table('kategori_pertanyaan')->select('kategori_pertanyaan.*')->get();

        $tipe = DB::table('tipe_pertanyaan')->select('tipe_pertanyaan.*')->get();
        
        return view('admin/pertanyaan/tambah_pertanyaan', [
            "title" => "Tambah Pertanyaan",
            "kat" => $kat,
            "tipe" => $tipe,
        ]);
    }

    public function store(Request $request)
    {

        Pertanyaan::insertGetId([
            'pertanyaan' => $request->pertanyaan,
            'id_kategori' => $request->kategori,
            'id_tipe_pertanyaan' => $request->tipe,
        ]);
        
        return redirect('pertanyaan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id){

        $pertanyaan = Pertanyaan::join('kategori_pertanyaan', 'kategori_pertanyaan.id_kategori', '=', 'pertanyaans.id_kategori')
            ->join('tipe_pertanyaan', 'tipe_pertanyaan.id_tipe_pertanyaan', '=', 'pertanyaans.id_tipe_pertanyaan')
            ->select('pertanyaans.*','kategori_pertanyaan.*','tipe_pertanyaan.*')
            ->where('id',$id)
            ->get();

        $kat = DB::table('kategori_pertanyaan')->select('kategori_pertanyaan.*')->get();

        $tipe = DB::table('tipe_pertanyaan')->select('tipe_pertanyaan.*')->get();

        return view('admin/pertanyaan/edit_pertanyaan',
        [
            "title"=>"Edit Pertanyaan",
            "data" => $pertanyaan,
            "kat" => $kat,
            "tipe" => $tipe,
        ]);
    }

    public function update(Request $request)
    {
        Pertanyaan::where('id', $request->id)->update([
            'pertanyaan' => $request->pertanyaan,
            'id_kategori' => $request->kategori,
            'id_tipe_pertanyaan' => $request->tipe,
        ]);
        
        return redirect('pertanyaan')->with('success', 'Data berhasil diubah!');
    }

    public function hapus($id)
    {
        Pertanyaan::where('id', $id)->delete();
        Jawaban::where('id_jawaban', $id)->delete();

        return redirect('pertanyaan')->with('success', 'Data berhasil dihapus!');
    }

    public function show(){

        $pertanyaan = Pertanyaan::join('tipe_pertanyaan', 'tipe_pertanyaan.id_tipe_pertanyaan', '=', 'pertanyaans.id_tipe_pertanyaan')
                ->select('pertanyaans.*','tipe_pertanyaan.*')
                ->get();

        $jwb = Jawaban::join('pertanyaans', 'pertanyaans.id', '=', 'jawabans.id_pertanyaan')
                ->select('pertanyaans.*','jawabans.*')
                ->where('id_pertanyaan','=',1)
                ->get();
        
        return view('pt/form_spmi', [
            "title" => "Form",
            "pertanyaan" => $pertanyaan,
            "jawaban" => $jwb,
        ]);
    }

}
