@extends('pt_layout.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0 px-4">
                    <h4 class="mb-0">Form Penilaian SPMI</h4><br>
                    <p class="mb-0 text-md">Form Penilaian Sistem Penjaminan Mutu Internal Perguruan Tinggi</p>
                </div>
                <div class="card-body pt-0 p-4"></div>
            </div>
        </div>
    </div>
    <br>
    <form action="/hasil" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0 px-4">
                        <p class="mb-0 text-md">Nama</p>
                    </div>
                    <div class="card-body pt-2 p-0">
                        <div class="row px-4">
                            <div class="col-4">
                                <div class="input-group input-group-static mb-4">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0 px-4">
                        <p class="mb-0 text-md">Jabatan Perguruan Tinggi</p>
                    </div>
                    <div class="card-body pt-2 p-0">
                        <div class="row px-4">
                            <div class="col-4">
                                <div class="input-group input-group-static mb-4">
                                    <input type="text" class="form-control" name="jabatan" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        @foreach ($pertanyaan as $p)
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0 px-4">
                            <p class="mb-0 text-md">{{ $p->pertanyaan }}</p>
                        </div>
                        @if ($p->tipe_pertanyaan === 'radiobutton')
                            @foreach ($jawaban as $j)
                                @if ($p->id === $j->id_pertanyaan)
                                    <div class="card-body pt-2 p-1">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="radio[{{ $p->id }}]"
                                                value="{{ $j->jawaban }}" id="customRadio{{ $p->id }}">
                                            <label class="custom-control-label"
                                                for="customRadio{{ $p->id }}">{{ $j->jawaban }}</label>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @elseif($p->tipe_pertanyaan === 'checkbox')
                            @foreach ($jawaban as $j)
                                @if ($p->id === $j->id_pertanyaan)
                                    <div class="card-body pt-2 p-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $j->jawaban }}" name="check[]" 
                                            id="fcustomCheck{{ $p->id }}">
                                            <label class="custom-control-label"
                                                for="customCheck{{ $p->id }}">{{ $j->jawaban }}</label>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
