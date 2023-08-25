<x-app>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-3 pt-3">

                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"> Data Pengumuman</h1>
                        <a href="{{ url('admin/pengumuman/create') }}" class="btn btn-primary float-right"><i
                                class="fa fa-plus"></i>
                            Tambah Pengumaman</a>
                    </div>

                    <div class="card-body">
                        <table id="table1" class="table table-bordered table-striped">
                            <thead class="btn-primary">
                                <th width="1%">NO</th>
                                <th width="20%x">AKSI</th>
                                <th>TANGGAL PENGUMUMAN</th>
                            </thead>

                            <tbody>
                                @foreach ($list_data as $pengumuman)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('admin/pengumuman', $pengumuman->id) }}"
                                                class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{ url('admin/pengumuman', $pengumuman->id) }}/edit"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <form action="" method="post" class="d-inline">
                                                @csrf
                                                <button class="btn btn-danger"><i class="fa fa-trash"
                                                        onclick="return confirm('apakah ingin dihapus?')"></i></button>
                                            </form>
                                        </td>
                                        <td>{{ $pengumuman->created_at->format('F j, Y, g:i a') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

</x-app>