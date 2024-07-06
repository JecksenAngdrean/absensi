<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
  <div class="container-fluid">
  <button id="sidebarToggle" class="navbar-toggler" type="button" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon icon-bar"></span>
  <span class="navbar-toggler-icon icon-bar"></span>
  <span class="navbar-toggler-icon icon-bar"></span>
</button>
<div class="logout-button">
        <a class="logout-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
  </div>
</nav>
      <!-- End Navbar -->
      <!-- End Navbar -->
      <div class="content">