@extends('admin_layout.admin_main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">Tambah Jawaban</h5>
            </div>
            <div class="card-body pt-2 p-3">
            <form action="/jawaban/store" method="post">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Pertanyaan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="pertanyaan">
                                @foreach ($pertanyaan as $p ) 
                                <option value="{{ $p->id }}">{{ $p->pertanyaan }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Jawaban</label>
                                <input type="text" class="form-control" name="jawaban" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Rekomendasi</label>
                                <input type="text" class="form-control" name="rekomendasi" required="required">
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