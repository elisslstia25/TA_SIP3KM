<x-dosen>

    <div class="row">
        <div class="col-md-6">
            <section class="content">
                <div class="container-fluid">

                    <!-- Profile -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">

                            <a href="{{ url('dosen/profil',Auth::guard('dosen')->user()->id)}}/edit" class="btn btn-warning float-right"><span class="fa fa-edit"></span> Edit Profil</a>
                            <h1>Data Profil</h1>
                            <div class="text-center">
                                <hr>
                                <img class="profile-user-img"
                                    src="{{ url('public', Auth::guard('dosen')->user()->foto) }}"
                                    onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ Auth::guard('dosen')->user()->nama }}</h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>NIDN</b> <a class="float-right"> {{ Auth::guard('dosen')->user()->nidn }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nama</b> <a class="float-right">{{ Auth::guard('dosen')->user()->nama }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jenis Kelamin</b> <a class="float-right">{{ Auth::guard('dosen')->user()->jenis_kelamin }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Tempat Lahir</b> <a class="float-right">{{ Auth::guard('dosen')->user()->tempat_lahir }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Tanggal Lahir</b> <a class="float-right">{{ Auth::guard('dosen')->user()->tgl_lahir }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status Dosen</b> <a class="float-right">{{ Auth::guard('dosen')->user()->status_dosen }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section class="content">
                <div class="container-fluid">
                    <!-- Kepegawaian -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <h1>Data Kepegawaian</h1>
                            <div class="text-center">
                            </div>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Institusi</b> <a class="float-right">{{ Auth::guard('dosen')->user()->institusi }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Program Studi</b> <a class="float-right">{{ Auth::guard('dosen')->user()->program_studi }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jenjang Pendidikan</b> <a
                                        class="float-right">{{ Auth::guard('dosen')->user()->jenjang_pendidikan }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Jabatan Akademik</b> <a
                                        class="float-right">{{ Auth::guard('dosen')->user()->jabatan_akademik }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Bidang Keahlian</b> <a
                                        class="float-right">{{ Auth::guard('dosen')->user()->bidang_keahlian }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Alamat</b> <a class="float-right">{{ Auth::guard('dosen')->user()->alamat }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


</x-dosen>
