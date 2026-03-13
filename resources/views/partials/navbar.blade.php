<nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
    <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Muse" class="logo-img d-inline-block align-middle">
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="{{ url('/#about') }}" class="nav-item nav-link">About</a>
            <a href="/#services" class="nav-item nav-link">Services</a>
            <a href="/#contact-anchor" class="nav-item nav-link">Contact</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('team') || request()->routeIs('testimonial') || request()->routeIs('notfound') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Our Models</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonial</a>
                    <a href="{{ route('notfound') }}" class="dropdown-item {{ request()->routeIs('notfound') ? 'active' : '' }}">404 Page</a>
                </div>
            </div>
        </div>

            <div class="d-none d-lg-flex align-items-center gap-2">
                 <a href="{{ route('register') }}" class="btn btn-outline-primary border-2">Registrarme</a>
                 <a href="{{ route('login') }}" class="btn btn-primary">Acceder</a>
            </div>
    </div>
</nav>