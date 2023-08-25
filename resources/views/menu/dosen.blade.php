
    <li class="nav-item has-treeview">
        <a href="{{url('dosen')}}" class="nav-link">
          <i class="nav-icon fas fa-home" style="color: white"></i>
          <p style="color: white">
            Dashboard
          </p>
        </a>
           <li class="nav-item">
            <a href="{{url('dosen/profil')}}" class="nav-link">
              <i class="far fa-user nav-icon" style="color: white"></i>
              <p style="color: white">Profil</p>
            </a>
          </li>
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
            <a href="{{url('dosen/usulanbaru')}}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color: white"></i>
              <p style="color: white">Usulan Baru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dosen/berjalan')}}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color: white"></i>
              <p style="color: white">Penelitian Aktif</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dosen/selesai')}}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color: white"></i>
              <p style="color: white">Penelitian Selesai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dosen/riwayat')}}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color: white"></i>
              <p style="color: white">Riwayat Usulan</p>
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
            <a href="{{ url('dosen/usulan_baru') }}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color: white"></i>
              <p style="color: white">Usulan Baru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('dosen/berjalan_') }}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color: white"></i>
              <p style="color: white">Pengabdian Aktif</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('dosen/selesai_') }}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color: white"></i>
              <p style="color: white">Pengabdian Selesai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('dosen/riwayat_') }}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color: white"></i>
              <p style="color: white">Riwayat Selesai</p>
            </a>
          </li>
        </ul>
      </li>



