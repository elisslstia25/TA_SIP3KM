<x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="admin/pegawai" />
                        <h4>Data Pegawai</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/pegawai', $pegawai->id) }}" method="post">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">NIDN</label>
                                        <div class="col-md-9">
                                            {{ $pegawai->nidn }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <div class="col-md-9">
                                            {{ $pegawai->nama }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <div class="col-md-9">
                                            {{ $pegawai->email }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">No KTP</label>
                                        <div class="col-md-9">
                                            {{ $pegawai->nik }}
                                        </div>
                                    </div>
                                </div>

                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</x-app>