@extends('admin_layout.admin_main')

@section('content')

<div class="card">
    <div class="card-header pb-0 px-3">
        <div class="row">
            <div class="col-7">
                <h5 class="text-black text-capitalize ps-3">Riwayat Jawaban</h5>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table id="table_id" class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Perguruan Tinggi</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Jawab</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            @foreach ($form as $f )
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-sm text-secondary mb-0"><?= $i++; ?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $f->nama_pt }}</p>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-sm text-secondary mb-0">{{ $f->jabatan }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ date('d-M-Y', strtotime($f->created_at)) }}</p>
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