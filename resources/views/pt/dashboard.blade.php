@extends('pt_layout.main')

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">groups</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Total Mahasiswa</p>
                    <h4 class="mb-0">2453</h4>
                </div>
            </div>
            <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask year</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">supervisor_account</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Total Dosen</p>
                    <h4 class="mb-0">70</h4>
                </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">school</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Total Program Studi</p>
                    <h4 class="mb-0">20</h4>
                </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last few years</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">query_stats</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Total Publikasi</p>
                    <h4 class="mb-0">2000</h4>
                </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than last month</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="template/assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>        
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ $data->nama_pt }}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                    {{ $data->nm_bp }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-12 col-xl-5">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <h6 class="mb-0">Profil Perguruan Tinggi</h6>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:;">
                                        <i class="fas fa-user text-secondary text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">NPSN:</strong> &nbsp; {{ $data->npsn }} </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Lembaga:</strong> &nbsp; {{ $data->lembaga }} </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Kelompok Koordinator:</strong> &nbsp; {{ $data->kelompok_koordinator }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Provinsi:</strong> &nbsp; {{ $data->provinsi_pt }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Jalan:</strong> &nbsp; {{ $data->jln }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Kecamatan:</strong> &nbsp; {{ $data->kec_pt }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Kota/Kabupaten:</strong> &nbsp; {{ $data["kabupaten/kota"] }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Website:</strong> &nbsp; {{ $data->website }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">No Telp:</strong> &nbsp; {{ $data->no_tel }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $data->email }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-body p-3 mb-3">
                            <img src="assets/img/Graduation-pana.svg" height="110%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection