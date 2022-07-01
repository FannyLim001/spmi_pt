@extends('admin_layout.admin_main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">Tambah Pertanyaan</h5>
            </div>
            <div class="card-body pt-2 p-3">
            <form action="/pertanyaan/store" method="post">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Pertanyaan</label>
                                <input type="text" class="form-control" name="pertanyaan" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Kategori</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                @foreach ($kat as $k ) 
                                <option value="{{ $k->id_kategori }}">{{ $k->kategori_pertanyaan }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Tipe Pertanyaan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="tipe">
                                @foreach ($tipe as $t ) 
                                <option value="{{ $t->id_tipe }}">{{ $t->tipe }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection