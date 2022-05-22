<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    public function index(){

        $tipe = Tipe::all();

        return view('admin/tipe/tipe_pertanyaan',
        [
            "title"=>"Data Tipe Pertanyaan",
            "tipe" => $tipe,
        ]);
    }

    public function add(){
        $tipe = Tipe::all();
        
        return view('admin/tipe/tambah_tipepertanyaan', [
            "title" => "Tambah Tipe Pertanyaan",
            "tipe" => $tipe,
        ]);
    }

    public function store(Request $request)
    {
        Tipe::insertGetId([
            'tipe_pertanyaan' => $request->tipe_pertanyaan,
        ]);
        
        return redirect('pertanyaan/tipe')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id){

        $tipe = Tipe::select('tipe_pertanyaan.*')
            ->where('id_tipe_pertanyaan',$id)
            ->get();

        return view('admin/tipe/edit_tipepertanyaan',
        [
            "title"=>"Edit Tipe Pertanyaan",
            "tipe" => $tipe,
        ]);
    }

    public function update(Request $request)
    {
        Tipe::where('id_tipe_pertanyaan', $request->id)->update([
            'tipe_pertanyaan' => $request->tipe_pertanyaan,
        ]);
        
        return redirect('pertanyaan/tipe')->with('success', 'Data berhasil diubah!');
    }

    public function hapus($id)
    {
        Tipe::where('id_tipe_pertanyaan', $id)->delete();

        return redirect('pertanyaan/tipe')->with('success', 'Data berhasil dihapus!');
    }
}
