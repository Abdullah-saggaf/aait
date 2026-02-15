<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/logo3.svg') }}" alt="AAIT" class="logo-img mb-3">
                <p>AAIT - Advanced Analytical & Inspection Testing. ISO/IEC 17025 Accredited Materials Testing Laboratory serving construction projects across Saudi Arabia since 2005.</p>
            </div>
            <div class="col-md-2 mb-4">
                <h5 class="text-neo-lime">About</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('about.index') }}">About Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="text-neo-lime">Services</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('services.concrete') }}">Concrete Testing</a></li>
                    <li><a href="{{ route('services.soil') }}">Soil Testing</a></li>
                    <li><a href="{{ route('services.aggregates') }}">Aggregates Testing</a></li>
                    <li><a href="{{ route('services.asphalt') }}">Asphalt Testing</a></li>
                    <li><a href="{{ route('services.water') }}">Water Testing</a></li>
                    <li><a href="{{ route('services.contracting') }}">General Contracting</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="text-neo-lime">Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                    <li><a href="{{ route('partners.index') }}">Our Partners</a></li>
                </ul>
            </div>
        </div>
        <hr class="my-4" style="border-color: var(--neo-lime); opacity: 0.3;">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">&copy; {{ date('Y') }} AAIT. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">Established 2005 | Saudi Arabia</p>
            </div>
        </div>
    </div>
</footer>
