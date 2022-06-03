@extends('admin_layout.admin_main')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
        <span class="alert-icon align-middle">
          <span class="material-icons text-md">
          thumb_up_off_alt
          </span>
        </span>
        <span class="alert-text">{{ $message }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card">
    <div class="card-header pb-0 px-3">
        <div class="row">
            <div class="col-7">
                <h5 class="text-black text-capitalize ps-3">Jawaban</h5>
            </div>
            <div class="col-4">
                <a href="/jawaban/tambah">
                    <button class="btn btn-icon btn-3 btn-primary float-end" type="button">
                        <span class="btn-inner--icon"><i class="material-icons">library_add</i></span>
                        <span class="btn-inner--text">Tambah</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table id="table_id" class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jawaban</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rekomendasi</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            @foreach ($jawaban as $j )
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-sm text-secondary mb-0"><?= $i++; ?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-sm text-secondary mb-0">{{ Str::limit($j->jawaban, 70) }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ Str::limit($j->rekomendasi, 50) }}</p>
                    </td>
                    <td class="align-middle">
                        <a href="/jawaban/edit/{{$j->id_jawaban}}">
                            <button class="btn btn-icon btn-3 btn-info" type="button">
                                <span class="btn-inner--icon"><i class="material-icons">save_as</i></span>
                                <span class="btn-inner--text">Edit</span>
                            </button>
                        </a>
                        <a href="/jawaban/hapus/{{$j->id_jawaban}}">
                            <button class="btn btn-icon btn-3 btn-danger" type="button">
                                <span class="btn-inner--icon"><i class="material-icons">delete</i></span>
                                <span class="btn-inner--text">Hapus</span>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready( function () {
            $('#table_id').DataTable();
        } )
</script>

@endsection