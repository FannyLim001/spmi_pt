<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){

        $kat = Kategori::all();

        return view('admin/kategori/kategori_pertanyaan',
        [
            "title"=>"Data Kategori Pertanyaan",
            "kat" => $kat,
        ]);
    }

    public function add(){
        $kat = Kategori::all();
        
        return view('admin/kategori/tambah_kategoripertanyaan', [
            "title" => "Tambah Kategori Pertanyaan",
            "kat" => $kat,
        ]);
    }

    public function store(Request $request)
    {
        Kategori::insertGetId([
            'kategori_pertanyaan' => $request->kat_pertanyaan,
        ]);
        
        return redirect('pertanyaan/kategori')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id){

        $kat = Kategori::select('kategori_pertanyaan.*')
            ->where('id_kategori',$id)
            ->get();

        return view('admin/kategori/edit_kategoripertanyaan',
        [
            "title"=>"Edit Kategori Pertanyaan",
            "kat" => $kat,
        ]);
    }

    public function update(Request $request)
    {
        Kategori::where('id_kategori', $request->id)->update([
            'kategori_pertanyaan' => $request->kat_pertanyaan,
        ]);
        
        return redirect('pertanyaan/kategori')->with('success', 'Data berhasil diubah!');
    }

    public function hapus($id)
    {
        Kategori::where('id_kategori', $id)->delete();

        return redirect('pertanyaan/kategori')->with('success', 'Data berhasil dihapus!');
    }

}
