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
                <div class="card-body">
                    <div class="row">

                        <div class="col-12 col-sm-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                                href="#custom-tabs-one-home" role="tab"
                                                aria-controls="custom-tabs-one-home" aria-selected="true">Bagian I</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-one-profile" role="tab"
                                                aria-controls="custom-tabs-one-profile" aria-selected="false">Bagian
                                                II</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                                href="#custom-tabs-one-messages" role="tab"
                                                aria-controls="custom-tabs-one-messages" aria-selected="false">Bagian
                                                III</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                                href="#custom-tabs-one-settings" role="tab"
                                                aria-controls="custom-tabs-one-settings" aria-selected="false">Bagian
                                                IV</a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-home-tab">
                                            <div class="card-body">
                                                <input type="text" name="id_pegawai" class="form-control"
                                                    value="{{ Auth::guard('dosen')->user()->id }}" hidden>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>NIDN</label>
                                                            <input type="text" class="form-control" name="nidn"
                                                                value="{{ Auth::guard('dosen')->user()->nidn }}">
                                                        </div>


                                                        <div class="form-group">
                                                            <label>Status Pegawai</label>
                                                            <input type="text" class="form-control"
                                                                name="status_pegawai"
                                                                value="{{ Auth::guard('dosen')->user()->status_dosen }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Tanggung Jawab</label>
                                                            <input type="text" class="form-control"
                                                                name="tanggung_jawab"
                                                                value="{{ Auth::guard('dosen')->user()->tanggung_jawab }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Tahun Usulan</label>
                                                            <input type="text" class="form-control"
                                                                name="tahun_usulan"
                                                                value="{{ Auth::guard('dosen')->user()->tahun_usulan }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label> Tahun Pelaksanaan</label>
                                                            <input type="text" class="form-control"
                                                                name="tahun_pelaksanaan"
                                                                value="{{ Auth::guard('dosen')->user()->tahun_pelaksanaan }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Judul Penelitian</label>
                                                            <input type="text" class="form-control"
                                                                name="judul_penelitian"
                                                                value="{{ Auth::guard('dosen')->user()->judul_penelitian }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>TKT New</label>
                                                            <input type="text" class="form-control" name="tkt_new"
                                                                value="{{ Auth::guard('dosen')->user()->tkt_new }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>End TKT</label>
                                                            <input type="text" class="form-control" name="end_tkt"
                                                                value="{{ Auth::guard('dosen')->user()->end_tkt }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Skema Penelitian</label>
                                                            <input type="text" class="form-control"
                                                                name="skema_penelitian"
                                                                value="{{ Auth::guard('dosen')->user()->skema_penelitian }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rumpun Ilmu 1</label>
                                                            <input type="text" class="form-control"
                                                                name="rumpun_ilmu1"
                                                                value="{{ Auth::guard('dosen')->user()->rumpun_ilmu1 }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rumpun Ilmu 2</label>
                                                            <input type="text" class="form-control"
                                                                name="rumpun_ilmu2"
                                                                value="{{ Auth::guard('dosen')->user()->rumpun_ilmu2 }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rumpun Ilmu 3</label>
                                                            <input type="text" class="form-control"
                                                                name="rumpun_ilmu3"
                                                                value="{{ Auth::guard('dosen')->user()->rumpun_ilmu3 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-profile-tab">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Bidang Penelitian</label>
                                                        <input type="text" class="form-control"
                                                            name="bidang_penelitian"
                                                            value="{{ Auth::guard('dosen')->user()->bidang_penelitian }}">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Bidang PRN</label>
                                                        <input type="text" class="form-control" name="bidang_prn"
                                                            value="{{ Auth::guard('dosen')->user()->bidang_prn }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tema Penelitian</label>
                                                        <input type="text" class="form-control"
                                                            name="tema_penelitian"
                                                            value="{{ Auth::guard('dosen')->user()->tema_penelitian }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Topik Penelitian</label>
                                                        <input type="text" class="form-control"
                                                            name="topik_penelitian"
                                                            value="{{ Auth::guard('dosen')->user()->topik_penelitian }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Lama Kegiatan</label>
                                                        <input type="text" class="form-control"
                                                            name="lama_kegiatan"
                                                            value="{{ Auth::guard('dosen')->user()->lama_kegiatan }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nama Gelar</label>
                                                        <input type="text" class="form-control" name="nama_gelar1"
                                                            value="{{ Auth::guard('dosen')->user()->nama_gelar1 }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Kualifikasi 1</label>
                                                        <input type="text" class="form-control"
                                                            name="kualifikasi1"
                                                            value="{{ Auth::guard('dosen')->user()->kualifikasi1 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Bidang Keahlian 1</label>
                                                        <input type="text" class="form-control"
                                                            name="bidang_keahlian1"
                                                            value="{{ Auth::guard('dosen')->user()->bidang_keahlian1 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Peran 1</label>
                                                        <input type="text" class="form-control" name="peran1"
                                                            value="{{ Auth::guard('dosen')->user()->peran1 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tugas Penelitian 1</label>
                                                        <input type="text" class="form-control"
                                                            name="tugas_penelitian1"
                                                            value="{{ Auth::guard('dosen')->user()->tugas_penelitian1 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nama Gelar 2</label>
                                                        <input type="text" class="form-control" name="nama_gelar2"
                                                            value="{{ Auth::guard('dosen')->user()->nama_gelar2 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Kualifikasi 2</label>
                                                        <input type="text" class="form-control"
                                                            name="kualifikasi2"
                                                            value="{{ Auth::guard('dosen')->user()->kualifikasi2 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-messages-tab">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Bidang Keahlian</label>
                                                        <input type="text" class="form-control"
                                                            name="bidang_keahlian2"
                                                            value="{{ Auth::guard('dosen')->user()->bidang_keahlian2 }}">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Peran</label>
                                                        <input type="text" class="form-control" name="peran2"
                                                            value="{{ Auth::guard('dosen')->user()->peran2 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tugas Penelitian</label>
                                                        <input type="text" class="form-control"
                                                            name="tugas_penelitian2"
                                                            value="{{ Auth::guard('dosen')->user()->tugas_penelitian2 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dokumen</label>
                                                        <input type="text" class="form-control" name="dokumen"
                                                            value="{{ Auth::guard('dosen')->user()->dokumen }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dokumen 2</label>
                                                        <input type="text" class="form-control" name="dokumen2"
                                                            value="{{ Auth::guard('dosen')->user()->dokumen2 }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dokumen 3</label>
                                                        <input type="text" class="form-control" name="dokumen3"
                                                            value="{{ Auth::guard('dosen')->user()->dokumen3 }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Jumlah Pendanaan</label>
                                                        <input type="text" class="form-control"
                                                            name="jumlah_pendanaan"
                                                            value="{{ Auth::guard('dosen')->user()->jumlah_pendanaan }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nama Mitra</label>
                                                        <input type="text" class="form-control" name="nama_mitra"
                                                            value="{{ Auth::guard('dosen')->user()->nama_mitra }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Bidang Mitra</label>
                                                        <input type="text" class="form-control"
                                                            name="bidang_mitra"
                                                            value="{{ Auth::guard('dosen')->user()->bidang_mitra }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Alamat Mitra</label>
                                                        <input type="text" class="form-control"
                                                            name="alamat_mitra"
                                                            value="{{ Auth::guard('dosen')->user()->alamat_mitra }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dokumen Mitra</label>
                                                        <input type="text" class="form-control"
                                                            name="dokumen_mitra"
                                                            value="{{ Auth::guard('dosen')->user()->dokumen_mitra }}">
                                                    </div>

                                                    <div class="footer" style="margin-top: 10%">
                                                        <button type="submit" class="btn btn-info float-center"><span class="fa fa-arrow-left"></span> Kembali</button>
                                                        <button type="submit" class="btn btn-default float-right"><span class="fa fa-save"></span> Simpan</button>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 
                                        <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-settings-tab">
                                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna,
                                            iaculis
                                            tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque
                                            tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum
                                            consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec
                                            pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat
                                            diam.
                                            Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst.
                                            Praesent imperdiet accumsan ex sit amet facilisis.
                                        </div> --}}

                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dosen>
