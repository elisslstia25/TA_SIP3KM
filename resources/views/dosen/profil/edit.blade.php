<x-dosen>


    <form action="{{ url('dosen/profil', Auth::guard('dosen')->user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="">
                            <div class="card-header">
                                <h4>Ubah Data {{ Auth::guard('dosen')->user()->nama }}</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="container-fluid">

                        <div class="card-body">
                            <!-- Profile -->

                            <div class="form-group">
                                <label class="control-label">NIDN</label>
                                <input type="text" class="form-control" name="nidn"
                                    value="{{ auth()->user()->nidn }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama"
                                    value="{{ auth()->user()->nama }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    value="{{ auth()->user()->email }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">NIK</label>
                                <input type="text" class="form-control" name="nik"
                                    value="{{ auth()->user()->nik }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">No Telp</label>
                                <input type="text" class="form-control" name="no_hp"
                                    value="{{ auth()->user()->no_hp }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" name="username"
                                    value="{{ auth()->user()->username }}">
                            </div>

                            <div class="form-group row">
                                <label class="control-label">Poto</label>
                                <div class="col-md-6">
                                    <img class="d" src="{{ url('public', Auth::guard('dosen')->user()->foto) }}"
                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                </div>
                                <div class="col-md-12">
                                    <input type="file" class="form-control" name="foto"
                                        value="{{ auth()->user()->foto }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="container-fluid">

                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="text" class="form-control" name="password">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="Laki-Laki" @if (Auth::guard('dosen')->user()->jenis_kelamin == 'Laki-Laki') selected @endif>
                                        Laki-Laki</option>

                                    <option value="Perempuan" @if (Auth::guard('dosen')->user()->jenis_kelamin == 'Perempuan') selected @endif>
                                        Perempuan
                                    </option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="{{ auth()->user()->tempat_lahir }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir"
                                    value="{{ auth()->user()->tgl_lahir }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Status Dosen</label>
                                <input type="text" class="form-control" name="status_dosen"
                                    value="{{ auth()->user()->status_dosen }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Institusi Dosen</label>
                                <input type="text" class="form-control" name="institusi"
                                    value="{{ auth()->user()->institusi }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Program Studi</label>
                                <input type="text" class="form-control" name="program_studi"
                                    value="{{ auth()->user()->program_studi }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Jenjang Pendidikan</label>
                                <input type="text" class="form-control" name="jenjang_pendidikan"
                                    value="{{ auth()->user()->jenjang_pendidikan }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Jabatan Akademik</label>
                                <input type="text" class="form-control" name="jabatan_akademik"
                                    value="{{ auth()->user()->jabatan_akademik }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat"
                                    value="{{ auth()->user()->alamat }}" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Bidang Keahlian</label>
                                <input type="text" class="form-control" name="bidang_keahlian"
                                    value="{{ auth()->user()->bidang_keahlian }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-right mb-3"><i
                                        class="fa fa-save"></i>
                                    Simpan
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>



</x-dosen>
