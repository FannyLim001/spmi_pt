@extends('admin_layout.admin_main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">Tambah Kategori Pertanyaan</h5>
            </div>
            <div class="card-body pt-2 p-3">
            <form action="/pertanyaan/kategori/store" method="post">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Kategori Pertanyaan</label>
                                <input type="text" class="form-control" name="kat_pertanyaan" required="required">
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