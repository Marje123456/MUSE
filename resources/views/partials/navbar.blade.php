<nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
    <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
        <h2 class="mb-0 text-primary text-uppercase"><i class="fa-regular fa-face-smile me-1"></i>Poseify</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('team') || request()->routeIs('testimonial') || request()->routeIs('notfound') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Our Models</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonial</a>
                    <a href="{{ route('notfound') }}" class="dropdown-item {{ request()->routeIs('notfound') ? 'active' : '' }}">404 Page</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </div>
        <div class="d-none d-lg-flex">
            <a class="btn btn-outline-primary border-2" href="https://themewagon.com/themes/poseify">Download
                Now</a>
        </div>
    </div>
</nav>
