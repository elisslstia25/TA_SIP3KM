<x-dosen>

<div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Form Pengabdian Selesai
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-12 col-sm-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        {{-- <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Bagian I</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Bagian
                                                    II</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Bagian
                                                    III</a>
                                            </li>
                                             <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                                href="#custom-tabs-one-settings" role="tab"
                                                aria-controls="custom-tabs-one-settings" aria-selected="false">Bagian
                                                IV</a>
                                        </li> --}}
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                            <div class="card-body">
                                                <input type="text" name="id_pegawai" class="form-control" value="{{ Auth::guard('dosen')->user()->id }}" hidden>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Judul pengabdian</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->judul_pengabdian }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Skema pengabdian</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->skema_pengabdian }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Tema pengabdian</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->tema_pengabdian }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Topik pengabdian</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->topik_pengabdian }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label> Nama</label>
                                                            <div class="col-sm-9">
                                                                {{ auth()->user()->nama }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>NIDN</label>
                                                            <div class="col-sm-9">
                                                                {{ auth()->user()->nidn }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <div class="col-sm-9">
                                                                {{ auth()->user()->email }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <div class="col-sm-9">
                                                                {{ auth()->user()->alamat }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nama Anggota 1</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->nama_gelar1 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Bidang Keahlian 1</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->bidang_keahlian1 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Peran 1</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->peran1 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nama Anggota 2</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->nama_gelar2 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Bidang Keahlian 2</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->bidang_keahlian2 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Peran 2</label>
                                                            <div class="col-sm-9">
                                                                {{ $pengabdian->peran2 }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group row" style="margin-bottom: 0px;">
                                                            <div class="col-lg-12">
                                                                <label>Dokumen Proposal Akhir</label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                              
                                                                    @csrf <!-- CSRF token for security -->
                                                                    @method('PUT') <!-- Specify the HTTP method as PUT for data update -->
                                                                    <div class="mb-3">
                                                                        <input type="file" class="form-control" name="dokumen_selesai" accept="application/pdf">
                                                                    </div>
                                                                    <button class="btn btn-dark btn-block" type="submit">
                                                                        Save
                                                                    </button>
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="float-right">
                                                            <!-- <button type="submit" class="btn btn-info float-center"><span class="fa fa-arrow-left"></span> Kembali</button> -->
                                                            <button type="submit" class="btn btn-default float-right"><span class="fa fa-save"></span> Simpan</button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dosen>