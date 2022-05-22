@extends('admin_layout.admin_main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">Tambah Perguruan Tinggi</h5>
            </div>
            <div class="card-body pt-2 p-3">
            <form action="/perguruantinggi/store" method="post">
                @csrf
                <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                    <label>NPSN (Nomor Pokok Sekolah Nasional)</label>
                                    <input type="text" class="form-control" name="npsn" required="required">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Nama Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="nama_pt" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                    <label>Nama Badan Penyelenggara</label>
                                    <input type="text" class="form-control" name="nm_bp" required="required">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                    <label>Lembaga</label>
                                    <input type="text" class="form-control" name="lembaga" required="required">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                    <label>Kelompok Koordinator</label>
                                    <input type="text" class="form-control" name="kelompok_koordinator">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Provinsi Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="provinsi_pt" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Kabupaten/Kota Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="kabupaten_kota" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Kecamatan Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="kec_pt" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Alamat Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="jln" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Website Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="website" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>No Telp Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="no_tel" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Email Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="email" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label>Password Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="password_pt" required="required">
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