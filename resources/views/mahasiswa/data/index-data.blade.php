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
            <div class="col-xl-auto">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>          
        @endif

        <!-- Menampilkan Data dari Database -->
        <div class="col-xl-auto">
            <table id="TabelMahasiswa" class="table table-bordered table-hover table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Email</th>
                        <th scope="col">Detail</th>
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
                        <td>
                            <a href="/mahasiswa/{{ $data_mhs->id }}" class="btn btn-info btn-sm">Detail</i></a>                           
                        </td>
                        <td>                           
                            <a href="/mahasiswa/{{ $data_mhs->id }}/edit" type="button" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>

                            <a href="/mahasiswa/{{ $data_mhs->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')"><i class="fas fa-trash-alt"></i></a>

                            {{-- <button type="submit" class="btn btn-danger mx-2 btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></button> --}}
                                
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

<!-- Modal untuk Hapus Data (sementara tidak dipakai) -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Ingin menghapus data mahasiswa {{ $data_mhs->nrp }} ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="{{ $data_mhs->id }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger mr-2" data-toggle="modal" data-target="#deleteModal">Hapus</button>
            </form>
        </div>
      </div>
    </div>
</div>