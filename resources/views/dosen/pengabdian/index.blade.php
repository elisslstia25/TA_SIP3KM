<x-dosen>

    <div class="row">
        <div class="col-md-12">
            <div class="mt-3 pt-3">

                <div class="card">
                    <div class="card-header">

                        <h1 class="card-title"> Data Usulan Baru Pengabdian</h1>
                        <a href="{{ url('dosen/pengabdian/create') }}" class="btn btn-primary float-right"><i
                                class="fa fa-plus"></i> Tambah
                            Pengabdian</a>
                            <div class="notification-card" style=" position: fixed;
        top: 20px;
        right: 20px;
        max-width: 300px;
        z-index: 9999;">
                            @if (session('eror'))
                            <div class="alert alert-success">
                                {{ session('eror') }}
                                <!-- Add a close button (x) to dismiss the notification -->
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">

                        <table id="table1" class="table table-bordered table-striped">
                            <thead class="btn-primary">
                                <th style="width: 1%">NO</th>
                                <th style="width: 20%">AKSI</th>
                                <th>STATUS</th>
                                <th>NAMA PENGUSUL</th>
                                <th>JUDUL PENGABDIAN</th>
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
                                                    <x-button.info-button url="dosen/pengabdian"
                                                        id="{{ $pengabdian->id }}" />
                                                        <x-button.delete-button url="dosen/pengabdian"
                                                            id="{{ $pengabdian->id }}" />
                                                    <!-- <x-button.edit-button url="dosen/pengabdian"
                                                        id="{{ $pengabdian->id }}" /> -->
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn btn-warning" for="">Belum Di Danai</div>
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
</x-dosen>
