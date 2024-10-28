<nav class="sb-topnav navbar navbar-expand">
  <!-- Navbar Brand-->
  <a class="navbar-brand text-white ps-3" href="#">
    <img src="{{ asset('images/OoredooLogo.png') }}" alt="Logo" class="navbar-logo img-fluid d-inline-block">
  </a>
  <!-- Sidebar Toggle-->
  <button class="text-white btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
  <!-- Navbar Search-->
  <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
          <button class="btn btn-secondary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
  </form>
  <!-- Navbar-->
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#!">Settings</a></li>
              <li><a class="dropdown-item" href="#!">Activity Log</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
          </ul>
      </li>
  </ul>
</nav>

{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary shadow sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav> --}}