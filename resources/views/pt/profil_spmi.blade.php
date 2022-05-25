@extends('pt_layout.main')

@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('template') }}/assets/img/university.jpg" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $LoggedUserInfo->nama_pt }}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            {{ $LoggedUserInfo->nm_bp }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12 mt-4">
                        <h6 class="mb-1">Data Pengisi</h6>
                        <p class="text-sm">Form Penilaian SPMI</p>
                        <p>Nama: {{ $nama }}</p>
                        <p>Jabatan: {{ $jabatan }}</p>
                        <h6 class="mb-1">Hasil</h6>
                        <p class="text-sm">Hasil SPMI</p>
                        <p>
                            @foreach ($radio as $j)
                                {{ $j }}.
                            @endforeach
                            @foreach ($check as $c)
                                {{ $c }}.
                            @endforeach
                        </p>
                        <h6 class="mb-1">Rekomendasi</h6>
                        <p class="text-sm">Rekomendasi berdasarkan hasil SPMI</p>
                        <p>
                            @foreach ($radio as $j)
                                @foreach ($rekomendasi as $r)
                                    @if ($r->jawaban === $j)
                                        {{ $r->rekomendasi }}.
                                    @endif
                                @endforeach
                            @endforeach
                                @foreach ($rekomendasi as $r)
                                    @foreach ($check as $c)
                                        @if ($r->jawaban === $c)
                                            {{ $r->rekomendasi }}.
                                        @endif
                                    @endforeach
                                @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
