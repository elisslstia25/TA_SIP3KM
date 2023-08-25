<x-app>
   
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Admin</h4>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Nama</dt>
                            <dd>{{ $admin->username }}</dd>
                            <dt>NIDN</dt>
                            <dd>{{ $admin->nidn }}</dd>
                            <dt>Email</dt>
                            <dd>{{ $admin->email }}</dd>
                            <dt>Username</dt>
                            <dd>{{ $admin->jenis_kelamin }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</x-app>