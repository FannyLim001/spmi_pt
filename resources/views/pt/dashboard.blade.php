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
                    <h4 class="mb-0">{{ $LoggedUserInfo['total_mhs'] }}</h4>
                </div>
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
                    <h4 class="mb-0">{{ $LoggedUserInfo['total_dosen'] }}</h4>
                </div>
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
                    <h4 class="mb-0">{{ $LoggedUserInfo['total_program'] }}</h4>
                </div>
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
                    <h4 class="mb-0">{{ $LoggedUserInfo['total_publikasi'] }}</h4>
                </div>
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
                    <img src="{{asset('template')}}/assets/img/university.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>        
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                    {{ $LoggedUserInfo['nama_pt'] }}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                    {{ $LoggedUserInfo['nm_bp'] }}
                    </p>
                </div>
            </div>
            <div class="col-auto text-right">
                <div class="h-100">
                <a href="/pt/edit/{{$LoggedUserInfo['id']}}">
                    <button class="btn btn-icon btn-3 btn-info" type="button">
                        <span class="btn-inner--icon"><i class="material-icons">save_as</i></span>
                        <span class="btn-inner--text">Edit</span>
                    </button>
                </a>
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
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">NPSN:</strong> &nbsp; {{ $LoggedUserInfo['npsn'] }} </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Lembaga:</strong> &nbsp; {{ $LoggedUserInfo['lembaga'] }} </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Kelompok Koordinator:</strong> &nbsp; {{ $LoggedUserInfo['kelompok_koordinator'] }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Provinsi:</strong> &nbsp; {{ $LoggedUserInfo['provinsi_pt'] }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Jalan:</strong> &nbsp; {{ $LoggedUserInfo['jln'] }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Kecamatan:</strong> &nbsp; {{ $LoggedUserInfo['kec_pt'] }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Kota/Kabupaten:</strong> &nbsp; {{ $LoggedUserInfo['kabupaten/kota'] }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Website:</strong> &nbsp; {{ $LoggedUserInfo['website'] }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">No Telp:</strong> &nbsp; {{ $LoggedUserInfo['no_tel'] }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $LoggedUserInfo['email'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-body p-3 mb-3">
                            <img src="{{asset('template')}}/assets/img/Graduation-pana.svg" height="110%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection