<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo5.svg') }}" alt="AAIT" style="height: 40px; width: auto; display: block;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- About Us -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about.*') ? 'active' : '' }}" href="{{ route('about.index') }}">About Us</a>
                </li>
                
                <!-- Scope & Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('services.*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Scope & Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services.concrete') }}">Concrete Lab and Field Testing</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.soil') }}">Soil Lab and Field Testing</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.aggregates') }}">Aggregates Lab and Field Testing</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.asphalt') }}">Asphalt Lab and Field Testing</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.water') }}">Water Lab Testing</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.contracting') }}">General Contracting</a></li>
                    </ul>
                </li>
                
                <!-- Partners -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('partners.*') ? 'active' : '' }}" href="{{ route('partners.index') }}">Partners</a>
                </li>
                
                <!-- Contact Us -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
