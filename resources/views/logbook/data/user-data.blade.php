<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Logbook</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        @foreach ($mahasiswa->logbook as $logbook)
        <table class="table table-bordered m-0 p-0 mb-3">
            <tbody>
                <tr>
                    <th scope="col">Tanggal</th>
                    <td class="col-4">{{ $logbook->hari}}, {{ $logbook->tanggal}}</td>
                </tr>
                <tr>
                    <th scope="col">Nama Kegiatan</th>
                    <td class="col-4">{{ $logbook->pivot->kegiatan}}</td>
                </tr>
                <tr>
                    <th scope="col">Jenis Kegiatan</th>
                    <td class="col-4">{{ $logbook->jenis_kegiatan}}</td>
                </tr>               
                <tr>
                    <th scope="col">Keterangan</th>
                    <td class="col-4">{{ $logbook->keterangan}}</td>
                </tr>
            </tbody>
        </table>                        
        @endforeach
        
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->