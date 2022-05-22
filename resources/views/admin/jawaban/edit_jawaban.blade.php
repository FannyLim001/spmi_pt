@extends('admin_layout.admin_main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">Edit Jawaban</h5>
            </div>
            <div class="card-body pt-2 p-3">
            @foreach ($data as $d)
            <form action="/jawaban/update" method="post">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="id" value="{{ $d->id }}">
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Pertanyaan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="pertanyaan">
                                <option value="{{ $d->id }}">{{ $d->pertanyaan }}</option>
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
                                <input type="text" class="form-control" name="jawaban" value="{{ $d->jawaban }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Rekomendasi</label>
                                <input type="text" class="form-control" name="rekomendasi" value="{{ $d->rekomendasi }}">
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