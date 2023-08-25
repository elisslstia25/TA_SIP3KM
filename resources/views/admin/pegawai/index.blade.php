<x-app>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center"> Data Pegawai</h4>

                        <a href="{{ url('admin/pegawai/create') }}" class="btn btn-outline-primary"><i
                                class="fa fa-plus"></i> Tambah Pegawai</a>
                        <hr>
                        <table id="table1" class="table table-bordered">
                            <thead class="btn-primary">
                                <th>No</th>
                                <th width="100px">Aksi</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach ($list_pegawai as $pegawai)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/pegawai" id="{{ $pegawai->id }}" />
                                                <x-button.edit-button url="admin/pegawai" id="{{ $pegawai->id }}" />
                                                <x-button.delete-button url="admin/pegawai" id="{{ $pegawai->id }}" />

                                            </div>
                                        </td>
                                        <td>{{ ucwords($pegawai->nidn) }}</td>
                                        <td>{{ $pegawai->nama }}</td>
                                        <td>{{ $pegawai->email }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>
