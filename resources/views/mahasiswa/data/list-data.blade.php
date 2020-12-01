<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Mahasiswa</h1>
        <a href="/mahasiswa/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fa fa-plus-square fa-sm text-white-50"></i> Tambah Data
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Pesan ketika data berhasil ditambahkan -->
        @if (session('status'))
            <div class="col-xl-10">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>          
        @endif

        <!-- Menampilkan Data dari Database -->
        <div class="col-xl-10">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                @foreach ($mahasiswa as $data_mhs)
                <tbody>
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data_mhs->nrp }}</td>
                        <td>{{ $data_mhs->nama }}</td>
                        <td>{{ $data_mhs->jenis_kelamin }}</td>
                        <td>{{ $data_mhs->prodi }}</td>
                        <td>{{ $data_mhs->email }}</td>
                        <td>{{ $data_mhs->alamat }}</td>
                        <td>
                        
                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>
                            
                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </td>
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