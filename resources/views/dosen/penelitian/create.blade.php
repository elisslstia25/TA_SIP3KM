<x-dosen>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Form Usulan Penelitian
                    </h3>
                </div>
                <form action="{{ url('dosen/penelitian') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <div class="col-12 col-sm-12">
                                <div class="card card-primary card-tabs">
                                    <div class="card-header p-0 pt-1">
                                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Substabsi Usulan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Identitas Anggota</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Identitas Pengusul</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Dokumen</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-dashboard-tab" data-toggle="pill" href="#custom-tabs-one-dashboard" role="tab" aria-controls="custom-tabs-one-dashboard" aria-selected="false">Mitra</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                                <div class="card-body">
                                                    <input type="text" name="id_pegawai" class="form-control" value="{{ Auth::guard('dosen')->user()->id }}" hidden>
                                                    <div class="container">

                                                        <div class="form-group">
                                                            <label>Skema Penelitian</label>

                                                            <select class="form-control" name="tema_penelitian">
                                                                <option value="">Pilih Skema Penelitian</option> <!-- Add a default option with an empty value -->
                                                                @foreach ($skemaPenelitian as $id => $skema)
                                                                <option value="{{ $skema }}" {{ (old('skema_penelitian') == $id || (Auth::guard('dosen')->check() && Auth::guard('dosen')->user()->skema_penelitian == $id)) ? 'selected' : '' }}>
                                                                    {{ $skema }}
                                                                </option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rumpun Ilmu 1</label>
                                                            <select class="form-control" name="rumpun_ilmu1">
                                                                <option value="{{ Auth::guard('dosen')->user()->rumpun_ilmu3 }}">Pilih Rumpun Ilmu 1</option> <!-- Add a default option with an empty value -->
                                                                <option>

                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rumpun Ilmu 2</label>

                                                            <select class="form-control" name="rumpun_ilmu2">
                                                                <option value="{{ Auth::guard('dosen')->user()->rumpun_ilmu2 }}">Pilih Rumpun Ilmu 2</option> <!-- Add a default option with an empty value -->
                                                                <option>

                                                                </option>
                                                            </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rumpun Ilmu 3</label>
                                                            <select class="form-control" name="rumpun_ilmu3">
                                                                <option value="{{ Auth::guard('dosen')->user()->rumpun_ilmu3 }}">Pilih Rumpun Ilmu 3</option> <!-- Add a default option with an empty value -->
                                                                <option>

                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Tema Penelitian</label>
                                                            <select class="form-control" name="tema_penelitian">
                                                                <option value="">Pilih Tema Penelitian</option> <!-- Add a default option with an empty value -->
                                                                @foreach ($temaPenelitian as $id => $tema)
                                                                <option value="{{ $tema }}" {{ (old('tema_penelitian') == $id || (Auth::guard('dosen')->check() && Auth::guard('dosen')->user()->tema_penelitian == $id)) ? 'selected' : '' }}>
                                                                    {{ $tema }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Topik Penelitian</label>
                                                            <select class="form-control" name="topik_penelitian">
                                                                <option value="{{ Auth::guard('dosen')->user()->topik_penelitian }}">Pilih Topik Penelitian</option> <!-- Add a default option with an empty value -->
                                                                <option>

                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>TKT</label>
                                                            <input type="text" class="form-control" name="tkt_new" value="{{ Auth::guard('dosen')->user()->tkt_new }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Judul Penelitian</label>
                                                            <input type="text" class="form-control" name="judul_penelitian" value="{{ Auth::guard('dosen')->user()->judul_penelitian }}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Tanggung Jawab</label>
                                                            <select class="form-control" name="tanggung_jawab">
                                                                <option value="{{ Auth::guard('dosen')->user()->tanggung_jawab }}">Pilih Tanggung Jawab</option> <!-- Add a default option with an empty value -->
                                                                <option> </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Tahun Usulan</label>
                                                            <input type="text" class="form-control" name="tahun_usulan" value="{{ Auth::guard('dosen')->user()->tahun_usulan }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label> Tahun Pelaksanaan</label>
                                                            <select class="form-control" name="tahun_pelaksanaan">
                                                                <option value="{{ Auth::guard('dosen')->user()->tahun_pelaksanaan }}">Pilih Tahun Pelaksanaan</option> <!-- Add a default option with an empty value -->
                                                                <option>

                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label> Lama Kegiatan</label>
                                                            <select class="form-control" name="lama_kegiatan">
                                                                <option value="{{ Auth::guard('dosen')->user()->lama_kegiatan }}">Pilih Lama Kegiatan</option> <!-- Add a default option with an empty value -->
                                                                <option>

                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Bidang Penelitian</label>
                                                            <input type="text" class="form-control" name="bidang_penelitian" value="{{ Auth::guard('dosen')->user()->bidang_penelitian }}">
                                                        </div>


                                                        <div class="form-group">
                                                            <label>Bidang Prioritas Riset Nasional (PRN)</label>
                                                            <input type="text" class="form-control" name="bidang_prn" value="{{ Auth::guard('dosen')->user()->bidang_prn }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Jumlah Pendanaan</label>
                                                            <select class="form-control" name="jumlah_pendanaan">
                                                                <option value="{{ Auth::guard('dosen')->user()->jumlah_pendanaan }}">Jumlah Pendanaan</option> <!-- Add a default option with an empty value -->
                                                                <option>

                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <!-- <button type="submit" class="btn btn-info float-center"><span class="fa fa-arrow-left"></span> Kembali</button> -->
                                                            <button type="submit" class="btn btn-default float-right"><span class="fa fa-save"></span> Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                                <div class="card-body">
                                                    <div class="container">

                                                        <div class="form-group">
                                                            <label>Nama Anggota 1</label>
                                                            <input type="text" class="form-control" name="nama_gelar1" value="{{ Auth::guard('dosen')->user()->nama_gelar1 }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Kualifikasi 1</label>
                                                            <input type="text" class="form-control" name="kualifikasi1" value="{{ Auth::guard('dosen')->user()->kualifikasi1 }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Bidang Keahlian 1</label>
                                                            <input type="text" class="form-control" name="bidang_keahlian1" value="{{ Auth::guard('dosen')->user()->bidang_keahlian1 }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Peran 1</label>
                                                            <input type="text" class="form-control" name="peran1" value="{{ Auth::guard('dosen')->user()->peran1 }}">
                                                        </div>

                                                    <div class="form-group">
                                                        <label>Tugas Penelitian 1</label>
                                                        <input type="text" class="form-control" name="tugas_penelitian1" value="{{ Auth::guard('dosen')->user()->tugas_penelitian1 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nama Anggota 2</label>
                                                        <input type="text" class="form-control" name="nama_gelar2" value="{{ Auth::guard('dosen')->user()->nama_gelar2 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Kualifikasi 2</label>
                                                        <input type="text" class="form-control" name="kualifikasi2" value="{{ Auth::guard('dosen')->user()->kualifikasi2 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Bidang Keahlian 2</label>
                                                        <input type="text" class="form-control" name="bidang_keahlian2" value="{{ Auth::guard('dosen')->user()->bidang_keahlian2 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Peran 2</label>
                                                        <input type="text" class="form-control" name="peran2" value="{{ Auth::guard('dosen')->user()->peran2 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tugas Penelitian 2</label>
                                                        <input type="text" class="form-control" name="tugas_penelitian2" value="{{ Auth::guard('dosen')->user()->tugas_penelitian2 }}">
                                                    </div>
                                                    <div>
                                                            <!-- <button type="submit" class="btn btn-info float-center"><span class="fa fa-arrow-left"></span> Kembali</button> -->
                                                            <button type="submit" class="btn btn-default float-right"><span class="fa fa-save"></span> Simpan</button>
                                                        </div>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">

                                                <div class="container">
                                                    
                                                        <div class="form-group">
                                                            <label>NIDN</label>
                                                            <input type="text" class="form-control" name="nidn" value="{{ Auth::guard('dosen')->user()->nidn }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" class="form-control" name="nama" value="{{ Auth::guard('dosen')->user()->nama }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Status Pegawai</label>
                                                            <input type="text" class="form-control" name="status_pegawai" value="{{ Auth::guard('dosen')->user()->status_dosen }}">
                                                        </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">

                                                <div class="container">

                                                    <div class="form-group row" style="margin-bottom: 0px;">
                                                        <div class="col-lg-12">
                                                            <label>Dokumen Proposal</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <a href="path_ke_file/dokumen_proposal.pdf" download>
                                                                <button type="button" class="btn btn-primary">Download</button>
                                                            </a>
                                                            <p style="color: red; font-size: 12px">*Download format diatas</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="file" class="form-control" name="dokumen" value="{{ Auth::guard('dosen')->user()->dokumen }}" accept="application/pdf">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <label>Dokumen RAB</label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <a href="path_ke_file/dokumen_rab.xls" download>
                                                                <button type="button" class="btn btn-primary">Download</button>
                                                            </a>
                                                            <p style="color: red; font-size: 12px">*Download format diatas</p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="file" class="form-control" name="dokumen2" value="{{ Auth::guard('dosen')->user()->dokumen2 }}" accept="application/xls">
                                                        </div>
                                                    </div>

                                                    <div>
                                                            <!-- <button type="submit" class="btn btn-info float-center"><span class="fa fa-arrow-left"></span> Kembali</button> -->
                                                            <button type="submit" class="btn btn-default float-right"><span class="fa fa-save"></span> Simpan</button>
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-one-dashboard" role="tabpanel" aria-labelledby="custom-tabs-one-dashboard-tab">

                                                <div class="container">
                                              
                                                        <div class="form-group">
                                                            <label>Nama Mitra</label>
                                                            <input type="text" class="form-control" name="nama_mitra" value="{{ Auth::guard('dosen')->user()->nama_mitra }}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Bidang Mitra</label>
                                                            <input type="text" class="form-control" name="bidang_mitra" value="{{ Auth::guard('dosen')->user()->bidang_mitra }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Alamat Mitra</label>
                                                            <input type="text" class="form-control" name="alamat_mitra" value="{{ Auth::guard('dosen')->user()->alamat_mitra }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Dokumen Mitra</label>
                                                            <input type="file" class="form-control" name="dokumen_mitra" value="{{ Auth::guard('dosen')->user()->dokumen_mitra }}" accept="application/pdf">
                                                        </div>

                                                        <div>
                                                            <!-- <button type="submit" class="btn btn-info float-center"><span class="fa fa-arrow-left"></span> Kembali</button> -->
                                                            <button type="submit" class="btn btn-success float-right"><span class="fa fa-save"></span> Kirim</button>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

</x-dosen>