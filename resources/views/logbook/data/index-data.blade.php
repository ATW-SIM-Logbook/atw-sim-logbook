<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Logbook</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Menampilkan Data dari Database -->
        <div class="col-xl-auto">
            <table class="table table-bordered table-hover table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Update Terakhir</th>
                    </tr>
                </thead>
                @foreach ($mahasiswa as $logbook)
                <tbody>
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $logbook->nrp }}</td>
                        <td>{{ $logbook->nama }}</td>
                        <td>{{ $logbook->hari }}</td>
                        <td>{{ $logbook->tanggal }}</td>
                        <td>{{ $logbook->kegiatan }}</td>
                        <td>{{ $logbook->keterangan }}</td>
                        <td>{{ $logbook->updated_at }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->