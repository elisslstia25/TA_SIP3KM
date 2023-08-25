<x-app>
    <x-button.back-button url="admin/pegawai" />
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Data Pegawai</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/pegawai') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">NIDN</label>
                                        <input type="text" class="form-control" name="nidn" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">No KTP</label>
                                        <input type="text" class="form-control" name="nik" required="">
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password" required="">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


</x-app>