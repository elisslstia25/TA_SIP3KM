<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="admin/admin" />
                        <h4>Edit Data Admin</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/admin', $admin->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Username</label>
                                        <input type="text" class="form-control" name="username"
                                            value={{ $admin->username }}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" required
                                            value={{ $admin->nama }}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value={{ $admin->email }}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control">
                                            <option value="Laki-Laki" @if ($admin->jenis_kelamin == 'Laki-Laki') selected @endif>
                                                Laki-Laki</option>

                                            <option value="Perempuan" @if ($admin->jenis_kelamin == 'Perempuan') selected @endif>
                                                Perempuan
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password">
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
