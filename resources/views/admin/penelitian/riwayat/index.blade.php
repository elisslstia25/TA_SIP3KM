<x-app>

    <div class="row">
        <div class="col-md-12">
            <div class="mt-3 pt-3">

                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"> Riwayat Penelitian</h1>
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
                                @foreach ($list_riwayat as $penelitian)
                                
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/penelitian-riwayat', $penelitian->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> Lihat</a>
                                        </div>
                                    </td>
                                    <td>
                                @if ($penelitian->status == 1)
                                <div class="btn btn-warning" for="">Belum Di danai</div>
                                @elseif($penelitian->status == 2)
                                <div class="btn btn-success" for="">Didanai</div>
                                @elseif($penelitian->status == 3)
                                <div for="" class="btn btn-success">Didanai</div>
                                @elseif($penelitian->status == 4)
                                <div for="" class="btn btn-danger">Tidak Didanai</div>
                                @endif
                                        <!-- <div class="btn btn-success" for="">Didanai</div> -->
                                    </td>
                                    <td>{{ $penelitian->pegawai->nama }}</td>
                                    <td>{{ $penelitian->judul_penelitian }}</td>
                                    <td>{{ $penelitian->created_at }}</td>
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