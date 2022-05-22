@extends('admin_layout.admin_main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">Edit Pertanyaan</h5>
            </div>
            <div class="card-body pt-2 p-3">
            @foreach ($data as $d)
                <form action="/pertanyaan/update" method="post">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                        <input type="hidden" name="id" value="{{ $d->id }}">
                            <div class="input-group input-group-static mb-4">
                                <label>Pertanyaan</label>
                                <input type="text" class="form-control" name="pertanyaan" value="{{ $d->pertanyaan }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Kategori</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                <option value="{{ $d->id_kategori }}">{{ $d->kategori_pertanyaan }}</option>
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
                                <option value="{{ $d->id_tipe_pertanyaan }}">{{ $d->tipe_pertanyaan }}</option>
                                @foreach ($tipe as $t ) 
                                <option value="{{ $t->id_tipe_pertanyaan }}">{{ $t->tipe_pertanyaan }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection