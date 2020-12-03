<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Mahasiswa</h1>
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
        <div class="col-xl-6">
            <div class="card">
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <th scope="col">NRP</th>
                            <td class="col-4">{{ $mahasiswa->nrp}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Nama</th>
                            <td class="col-4">{{ $mahasiswa->nama}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Jenis Kelamin</th>
                            <td class="col-4">{{ $mahasiswa->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Prodi</th>
                            <td class="col-4">{{ $mahasiswa->prodi}}</td>
                        </tr>
                        <tr>
                            <th scope="col">email</th>
                            <td class="col-4">{{ $mahasiswa->email}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Alamat</th>
                            <td class="col-4">{{ $mahasiswa->alamat}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-body d-flex flex-row-reverse pr-0">
                <a href="{{ $mahasiswa->id }}/edit" class="btn btn-primary">Edit</a>

                <button type="submit" class="btn btn-danger mx-2" data-toggle="modal" data-target="#deleteModal">Hapus</button>
                
                <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal untuk Hapus Data -->
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
        Ingin menghapus data mahasiswa {{ $mahasiswa->nrp }} ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="{{ $mahasiswa->id }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger mr-2" data-toggle="modal" data-target="#deleteModal">Hapus</button>
            </form>
        </div>
      </div>
    </div>
</div>