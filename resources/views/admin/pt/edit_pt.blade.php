@extends('admin_layout.admin_main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">Edit Perguruan Tinggi</h5>
            </div>
            <div class="card-body pt-2 p-3">
            @foreach ($pt as $p)
            <form action="/perguruantinggi/update" method="post">
                @csrf
                <div class="row">
                        <div class="col-md-12">
                        <input type="hidden" name="id" value="{{ $p->id }}">
                            <div class="input-group input-group-static mb-4">
                                    <label>NPSN (Nomor Pokok Sekolah Nasional)</label>
                                    <input type="text" class="form-control" name="npsn" value="{{ $p->npsn }}">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Nama Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="nama_pt" value="{{ $p->nama_pt }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                    <label>Nama Badan Penyelenggara</label>
                                    <input type="text" class="form-control" name="nm_bp" value="{{ $p->nm_bp }}">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                    <label>Lembaga</label>
                                    <input type="text" class="form-control" name="lembaga" value="{{ $p->lembaga }}">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                    <label>Kelompok Koordinator</label>
                                    <input type="text" class="form-control" name="kelompok_koordinator" value="{{ $p->kelompok_koordinator }}">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Provinsi Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="provinsi_pt" value="{{ $p->provinsi_pt }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Kabupaten/Kota Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="kabupaten_kota" value="{{ $p["kabupaten/kota"] }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Kecamatan Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="kec_pt" value="{{ $p->kec_pt }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Alamat Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="jln" value="{{ $p->jln }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Website Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="website" value="{{ $p->website }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>No Telp Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="no_tel" value="{{ $p->no_tel }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Email Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="email" value="{{ $p->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Password Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="password_pt" value="{{ $p->password_pt }}">
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