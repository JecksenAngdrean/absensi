<body style="background-color: white;">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">STMIK TIME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ request()->is('mahasiswas') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/mahasiswas') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown {{ request()->is('krs') || request()->is('krs/*') || request()->is('absens') || request()->is('absens/*') ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mahasiswa
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item {{ request()->is('krs') || request()->is('krs/*') ? 'active' : '' }}" href="{{ route('krs.index') }}">Kartu Rencana Studi</a>
            <a class="dropdown-item {{ request()->is('absens') || request()->is('absens/*') ? 'active' : '' }}" href="{{ url('/absens') }}">Absensi</a>
          </div>
        </li>
      </ul>
      
      <!-- Logout Link -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </li>
      </ul>
      <!-- End Logout Link -->
    </div>
  </nav>
  <!-- end navbar -->
</body>