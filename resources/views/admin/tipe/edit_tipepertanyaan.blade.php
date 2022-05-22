@extends('admin_layout.admin_main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">Edit Tipe Pertanyaan</h5>
            </div>
            <div class="card-body pt-2 p-3">
            @foreach ($tipe as $t)
                <form action="/pertanyaan/tipe/update" method="post">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                        <input type="hidden" name="id" value="{{ $t->id_tipe_pertanyaan }}">
                            <div class="input-group input-group-static mb-4">
                                <label>Tipe Pertanyaan</label>
                                <input type="text" class="form-control" name="tipe_pertanyaan" value="{{ $t->tipe_pertanyaan }}">
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