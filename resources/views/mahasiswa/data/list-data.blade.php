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
            <div class="col-xl-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>          
        @endif

        <!-- Menampilkan Data dari Database -->
        <div class="col-xl-8">
            <ul class="list-group">
                @foreach ($mahasiswa as $data_mhs)  
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $data_mhs->nrp . ' - ' . $data_mhs->nama }}
                    <a href="/mahasiswa/{{ $data_mhs->id }}" class="badge badge-primary badge-pill">detail</a>
                    </li>
                @endforeach
              </ul>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->