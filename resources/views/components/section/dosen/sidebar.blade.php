<aside class="main-sidebar bg-gradient-primary sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
        <img src="{{ url('public/template')}}/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-primary" style="color: white">SIP3KM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
          <img src="{{ url('public/template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <h1 class="profile-username text-center" style="color: white"> 
            {{ Auth::guard('dosen')->user()->nama }}
        </h1>
        <div class="info">
            <a href="#" class="d-block">
            </a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item has-treeview">
                <a href="{{url('dosen')}}" class="nav-link">
                    <i class="nav-icon fas fa-home" style="color: white"></i>
                    <p style="color: white">
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('dosen/profil')}}" class="nav-link">
                    <i class="far fa-user nav-icon" style="color: white"></i>
                    <p style="color: white">Profil</p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="{{url('dosen/penelitian')}}" class="nav-link">
                    <i class="nav-icon fas fa-file" style="color: white"></i>
                    <p style="color: white">
                        Penelitian
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('dosen/penelitian')}}" class="nav-link">
                            <i class="far fa-circle nav-icon" style="color: white"></i>
                            <p style="color: white">Usulan Baru</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dosen/penelitian-berjalan')}}" class="nav-link">
                            <i class="far fa-circle nav-icon" style="color: white"></i>
                            <p style="color: white">Penelitian Aktif</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dosen/penelitian-selesai')}}" class="nav-link">
                            <i class="far fa-circle nav-icon" style="color: white"></i>
                            <p style="color: white">Penelitian Selesai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dosen/penelitian-riwayat')}}" class="nav-link">
                            <i class="far fa-circle nav-icon" style="color: white"></i>
                            <p style="color: white">Riwayat Penelitian</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file" style="color: white"></i>
                    <p style="color: white">
                        Pengabdian
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('dosen/pengabdian') }}" class="nav-link">
                            <i class="far fa-circle nav-icon" style="color: white"></i>
                            <p style="color: white">Usulan Baru</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('dosen/pengabdian-berjalan') }}" class="nav-link">
                            <i class="far fa-circle nav-icon" style="color: white"></i>
                            <p style="color: white">Pengabdian Aktif</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('dosen/pengabdian-selesai') }}" class="nav-link">
                            <i class="far fa-circle nav-icon" style="color: white"></i>
                            <p style="color: white">Pengabdian Selesai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('dosen/pengabdian-riwayat') }}" class="nav-link">
                            <i class="far fa-circle nav-icon" style="color: white"></i>
                            <p style="color: white">Riwayat Pengabdian</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    </div>
</aside>