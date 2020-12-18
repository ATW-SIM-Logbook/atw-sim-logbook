<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Mahasiswa</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Menampilkan Data Form untuk Id tertentu -->
        <div class="col-xl-6 mb-5">

            <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
                @method('patch')
                <!-- Memproteksi data isian form agar tidak terkena csrf saat dikirim -->
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="InputNRP">NRP</label>
                    <input  name="nrp" 
                            type="text" 
                            class="form-control @error('nrp') is-invalid @enderror" 
                            id="InputNRP" 
                            placeholder="NRP"
                            value="{{ $mahasiswa->nrp }}">
                            @error('nrp') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="InputNama">Nama</label>
                    <input  name="nama" 
                            type="text" 
                            class="form-control @error('nama') is-invalid @enderror" 
                            id="InputNama" 
                            placeholder="Nama"
                            value="{{ $mahasiswa->nama }}">
                            @error('nama') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="InputJenisKelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" 
                            class="form-control @error('jenis_kelamin') is-invalid @enderror" 
                            id="InputJenisKelamin">
                        <option selected disabled>--</option>
                        <option value="Laki-laki" @if ($mahasiswa->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                        <option value="Perempuan" @if ($mahasiswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                    </select>
                            @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="InputProdi">Program Studi</label>
                    <input  name="prodi" 
                            type="text" 
                            class="form-control @error('prodi') is-invalid @enderror" 
                            id="InputProdi" 
                            placeholder="Program Studi"
                            value="{{ $mahasiswa->prodi }}">
                            @error('prodi') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <input  name="email" 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="InputEmail" 
                            placeholder="Email"
                            value="{{ $mahasiswa->email }}">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="InputAlamat">Alamat</label>
                    <textarea name="alamat" 
                              class="form-control @error('alamat') is-invalid @enderror" 
                              id="InputAlamat" 
                              rows="3">{{ $mahasiswa->alamat }}</textarea>
                              @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <h5 class="my-3 text-gray-800">Edit Logbook Mahasiswa</h5>

                <div class="form-group">
                    <label for="InputEmail">Hari</label>
                    <input  name="hari" 
                            type="text" 
                            class="form-control @error('hari') is-invalid @enderror" 
                            id="Inputhari" 
                            placeholder="hari"
                            value="{{ $mahasiswa->hari }}">
                            @error('hari') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="InputTanggal">Tanggal</label>
                    <input  name="tanggal" 
                            type="date" 
                            class="form-control @error('tanggal') is-invalid @enderror" 
                            id="Inputtanggal" 
                            placeholder="Tanggal"
                            value="{{ $mahasiswa->tanggal }}">
                            @error('tanggal') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="InputKegiatan">Kegiatan</label>
                    <input  name="kegiatan" 
                            type="text" 
                            class="form-control @error('kegiatan') is-invalid @enderror" 
                            id="Inputkegiatan" 
                            placeholder="kegiatan"
                            value="{{ $mahasiswa->kegiatan }}">
                            @error('kegiatan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="InputKeterangan">Keterangan</label>
                    <input  name="keterangan" 
                            type="text" 
                            class="form-control @error('keterangan') is-invalid @enderror" 
                            id="Inputketerangan" 
                            placeholder="keterangan"
                            value="{{ $mahasiswa->keterangan }}">
                            @error('keterangan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                <a href="/mahasiswa/{{ $mahasiswa->id }}" type="button" class="btn btn-secondary mx-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->