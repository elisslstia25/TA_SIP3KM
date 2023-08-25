<x-app>

<div class="row">
        <div class="col-md-12">
            <div class="mt-3 pt-3">

                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"> Data Pengabdian Usulan Baru</h1>
                        <a href="{{ url('admin/tema-add/pengabdian') }}" class="btn btn-primary float-right">
                            <i class="fa fa-plus"></i> Tambah list Pengabdian
                        </a>
                    </div>

                    <div class="card-body">
                        <table id="table1" class="table table-bordered table-striped">
                            <thead class="btn-primary">
                                <th width="1%">NO</th>
                                <th width="20%x">AKSI</th>
                                <th>STATUS</th>
                                <th>NAMA PENGUSUL</th>
                                <th>JUDUL PENGUSUL</th>
                                <th>TANGGAL PENGAJUAN</th>
                            </thead>
                            @php
                            $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_pengabdian as $pengabdian)
                                @if ($pengabdian->status == 1)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/pengabdian', $pengabdian->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> Lihat</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn btn-warning" for="">Belum Didanai</div>
                                    </td>
                                    <td>{{ $pengabdian->pegawai->nama }}</td>
                                    <td>{{ $pengabdian->judul_pengabdian }}</td>
                                    <td>{{ $pengabdian->created_at }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    

</x-app>