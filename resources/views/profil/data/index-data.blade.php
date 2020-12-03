<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="card d-flex flex-row col-lg-6 ml-2">
            <div class="card-body col-lg-5">
                <img class="card-img-top mb-4" src="{{ asset('assets/img/undraw_profile.svg') }}" alt="Card image cap">
                <h5 class="card-title text-center">{{ auth()->user()->name }}</h5>
                <p class="card-text text-center">{{ auth()->user()->email }}</p>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0">NRP</li>
                    <li class="list-group-item pl-0">jenis kelamin</li>
                    <li class="list-group-item pl-0">prodi</li>
                    <li class="list-group-item pl-0">alamat</li>
                </ul>
            </div>
        </div>

        
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->