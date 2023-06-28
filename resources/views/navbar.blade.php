<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    {{-- <nav class= navbar navbar-expand-sm bg-dark navbar-dark> --}}
      <div class="container">
        <a class="navbar-brand" href="/">HoMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
              <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
              <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item {{ Request::is('posting') ? 'active' : '' }}">
            <a class="nav-link" href="/posting">Posting</a>
        </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item {{ Request::is('') ? 'active' : '' }}">
              <a class="nav-link" href="#">Logout</a>
          </li>
          </ul>
        
      </ul>
        </div>
      </div>
    </nav>