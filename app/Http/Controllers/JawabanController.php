<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index(){

        $jwb = Jawaban::join('pertanyaans', 'pertanyaans.id', '=', 'jawabans.id_pertanyaan')
                ->select('pertanyaans.*','jawabans.*')
                ->get();

        return view('admin/jawaban/jawaban_admin',
        [
            "title"=>"Data Jawaban",
            "jawaban" => $jwb,
        ]);
    }

    public function add(){

        $jwb = Jawaban::select('jawabans.*')->get();

        $pertanyaan = Pertanyaan::select('pertanyaans.*')->get();
        
        return view('admin/jawaban/tambah_jawaban', [
            "title" => "Tambah Jawaban",
            "jwb" => $jwb,
            "pertanyaan" => $pertanyaan,
        ]);
    }

    public function store(Request $request)
    {

        Jawaban::insertGetId([
            'id_pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
            'rekomendasi' => $request->rekomendasi,
        ]);
        
        return redirect('jawaban')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id){

        $jwb = Jawaban::join('pertanyaans', 'pertanyaans.id', '=', 'jawabans.id_pertanyaan')
            ->select('pertanyaans.*','jawabans.*')
            ->where('jawabans.id_jawaban',$id)
            ->get();

        $pertanyaan = Pertanyaan::select('pertanyaans.*')->get();

        return view('admin/jawaban/edit_jawaban',
        [
            "title"=>"Edit Jawaban",
            "data" => $jwb,
            "pertanyaan" => $pertanyaan,
        ]);
    }

    public function update(Request $request)
    {

        Jawaban::where('id_jawaban', $request->id)->update([
            'id_pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
            'rekomendasi' => $request->rekomendasi,
        ]);
        
        return redirect('jawaban')->with('success', 'Data berhasil diubah!');
    }

    public function hapus($id)
    {
        Jawaban::where('id_jawaban', $id)->delete();

        return redirect('jawaban')->with('success', 'Data berhasil dihapus!');
    }
}
