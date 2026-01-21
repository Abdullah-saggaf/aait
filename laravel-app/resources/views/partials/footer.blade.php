<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/logo3.svg') }}" alt="AAIT" height="40" class="mb-3">
                <p>ISO/IEC 17025:2005 Calibration & Inspection Services across Saudi Arabia</p>
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
                    <li><a href="{{ route('services.calibration') }}">Calibration</a></li>
                    <li><a href="{{ route('services.inspection') }}">Inspection</a></li>
                    <li><a href="{{ route('services.certification') }}">Certification</a></li>
                    <li><a href="{{ route('services.maintenance') }}">Maintenance</a></li>
                    <li><a href="{{ route('services.training') }}">Training</a></li>
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
