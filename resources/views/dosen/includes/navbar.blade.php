<body style="background-color: white;">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">STMIK TIME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ request()->is('dosens') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/dosens') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown {{ request()->is('list-absen') || request()->is('absen/*') ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Akademik
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item {{ request()->is('list-absen') || request()->is('absen/*') ? 'active' : '' }}" href="{{ route('absen.list') }}">Absensi</a>
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