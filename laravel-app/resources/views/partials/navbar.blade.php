<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo4.svg') }}" alt="National Engineering Organization" height="40" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- About Us Single Link -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about.index') ? 'active' : '' }}" href="{{ route('about.index') }}">
                        About Us
                    </a>
                </li>
                
                <!-- Scope & Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('services.*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Scope & Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services.calibration') }}">Calibration Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.inspection') }}">Inspection Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.certification') }}">Certification Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.maintenance') }}">Maintenance & Repair Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.training') }}">Training Services</a></li>
                    </ul>
                </li>
                
                <!-- Partners -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('partners.*') ? 'active' : '' }}" href="{{ route('partners.index') }}">Partners</a>
                </li>
                
                <!-- License Validation Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('license.*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        License Validation
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('license.system') }}">System Certification</a></li>
                        <li><a class="dropdown-item" href="{{ route('license.equipment') }}">Equipment Certification</a></li>
                        <li><a class="dropdown-item" href="{{ route('license.personal') }}">Personal Certification</a></li>
                    </ul>
                </li>
                
                <!-- Contact Us -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
