<x-app>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center"> Data Admin</h4>

                        <a href="{{url('admin/admin/create')}}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Tambah Admin</a>
                        <hr>
                        <table id="table1" class="table table-bordered">
                            <thead class="btn-primary">
                                <th>No</th>
                                <th width="100px">Aksi</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach($list_admin as $admin)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-button.info-button url="admin/admin" id="{{ $admin->id }}" />
                                            <x-button.edit-button url="admin/admin" id="{{ $admin->id }}" />
                                            <x-button.delete-button url="admin/admin" id="{{ $admin->id }}" />
                                        </div>
                                    </td>
                                    <td>{{$admin->username}}</td>
                                    <td>{{$admin->nama}}</td>
                                    <td>{{$admin->email}}</td>
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