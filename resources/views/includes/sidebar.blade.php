<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <img src="{{asset('assets-real/img/logo-time.png')}}" style="width:50%"/>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('schedule') || request()->is('schedule/*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('schedule.index') }}">
              <i class="material-icons">library_books</i>
              <p>Jadwal</p>
            </a>
          </li>
          <li class="nav-item dropdown {{ request()->is('dosen') || request()->is('kelas') || request()->is('matkul') || request()->is('prodi') || request()->is('ta') || request()->is('dosen/*') || request()->is('kelas/*') || request()->is('matkul/*') || request()->is('prodi/*') || request()->is('ta/*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Master Data
            </a>
            <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
              <a class="dropdown-item" style=" {{ request()->is('dosen') || request()->is('mahasiswa/*') ? 'background-color:purple;color:white' : 'color:black' }}" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
              <a class="dropdown-item" style=" {{ request()->is('dosen') || request()->is('dosen/*') ? 'background-color:purple;color:white' : 'color:black' }}" href="{{ route('dosen.index') }}">Dosen</a>
              <a class="dropdown-item" style=" {{ request()->is('kelas') || request()->is('kelas/*') ? 'background-color:purple;color:white' : 'color:black' }}" href="{{ route('kelas.index') }}">Kelas</a>
              <a class="dropdown-item" style=" {{ request()->is('matkul') || request()->is('matkul/*') ? 'background-color:purple;color:white' : 'color:black' }}" href="{{ route('matkul.index') }}">Mata Kuliah</a>
              <a class="dropdown-item"  style=" {{ request()->is('prodi') || request()->is('prodi/*') ? 'background-color:purple;color:white' : 'color:black' }}" href="{{ route('prodi.index') }}">Program Studi</a>
              <a class="dropdown-item"  style=" {{ request()->is('ta') || request()->is('ta/*') ? 'background-color:purple;color:white' : 'color:black' }}" href="{{ route('ta.index') }}">Tahun Akademik</a>
            </div>
          </li>
        </ul>
      </div>
    </div>