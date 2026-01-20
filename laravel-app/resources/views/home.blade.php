@extends('layouts.app')

@section('title', 'Home - NEO Lab & Instrumentation Services')
@section('description', 'ISO/IEC 17025:2005 Calibration & Inspection Services across Saudi Arabia. ARAMCO-approved team delivering excellence.')

@section('content')
<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(135deg, #151741 0%, #1a1f5a 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h1 class="display-3 fw-bold mb-4" style="color: white !important;">ISO/IEC 17025:2005 Calibration & Inspection Services Across Saudi Arabia</h1>
                <p class="lead mb-4">Professional calibration services with full traceability to NIST, NPL (UK), and PTB. Our ARAMCO-approved team delivers consistent quality with flexible turnaround times.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('services.calibration') }}" class="btn btn-primary btn-lg">Explore Services</a>
                    <a href="{{ route('contact.index') }}" class="btn btn-outline-primary btn-lg" style="border-color: var(--neo-lime); color: var(--neo-lime);">Request a Quote</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                    <div class="text-center py-5">
                        <i class="bi bi-gear-wide-connected" style="font-size: 8rem; color: var(--neo-lime);"></i>
                        <p class="text-white mt-3 mb-0 fw-semibold">Modern Laboratory Equipment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KPI COUNTERS ROW -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="kpi-counter" data-target="19">0</div>
                    <div class="kpi-label mt-2">Years Experience</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="kpi-counter" data-target="500">0</div>
                    <div class="kpi-label mt-2">Projects Completed</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="kpi-counter" data-target="50">0</div>
                    <div class="kpi-label mt-2">Expert Team Members</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="kpi-counter" data-target="100">0</div>
                    <div class="kpi-label mt-2">Client Satisfaction %</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE OFFER -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">What We Offer</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card neo-card h-100">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-award-fill text-neo-lime" style="font-size: 3.5rem;"></i>
                        </div>
                        <h4 class="text-neo-navy mb-3">Calibration Excellence</h4>
                        <p class="mb-3">ISO/IEC 17025:2005 aligned calibration services for mechanical, electrical, and thermal measuring instruments with full traceability.</p>
                        <a href="{{ route('services.calibration') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card neo-card h-100">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-tools text-neo-lime" style="font-size: 3.5rem;"></i>
                        </div>
                        <h4 class="text-neo-navy mb-3">Onsite Commissioning</h4>
                        <p class="mb-3">Complete onsite calibration and commissioning services for equipment that cannot be moved, delivered by ARAMCO-approved technicians.</p>
                        <a href="{{ route('services.calibration') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card neo-card h-100">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-file-earmark-check-fill text-neo-lime" style="font-size: 3.5rem;"></i>
                        </div>
                        <h4 class="text-neo-navy mb-3">ISO Traceable Reporting</h4>
                        <p class="mb-3">Comprehensive calibration certificates with full traceability to NIST, NPL (UK), PTB, and national laboratories.</p>
                        <a href="{{ route('about.quality') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SOLUTIONS OVERVIEW -->
<section class="py-5" style="background: white;">
    <div class="container">
        <h2 class="section-title text-center mb-4">Solutions Overview</h2>
        <p class="text-center text-neo-navy mb-5">Explore our comprehensive range of calibration and inspection solutions</p>
        
        <!-- Category Pills -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
            <button class="category-pill active" data-category="calibration">Calibration Services</button>
            <button class="category-pill" data-category="inspection">Inspection Services</button>
            <button class="category-pill" data-category="certification">Certification Services</button>
            <button class="category-pill" data-category="maintenance">Maintenance & Repair</button>
            <button class="category-pill" data-category="training">Training</button>
        </div>
        
        <!-- Solution Cards Container -->
        <div id="solutionsContainer">
            <!-- Calibration Solutions (default) -->
            <div class="solutions-group" data-category="calibration">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Pressure & Temperature Calibration</h5>
                                <p class="mb-3">Professional calibration of pressure gauges, transmitters, thermocouples, and RTDs.</p>
                                <ul class="mb-3">
                                    <li>Pressure gauges & transmitters</li>
                                    <li>Temperature sensors & probes</li>
                                    <li>Full uncertainty analysis</li>
                                </ul>
                                <a href="{{ route('services.calibration') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Electrical & Dimensional Calibration</h5>
                                <p class="mb-3">Calibration services for electrical instruments and dimensional measuring tools.</p>
                                <ul class="mb-3">
                                    <li>Multimeters & clamp meters</li>
                                    <li>Micrometers & calipers</li>
                                    <li>ISO traceable standards</li>
                                </ul>
                                <a href="{{ route('services.calibration') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Other categories (hidden by default) -->
            <div class="solutions-group d-none" data-category="inspection">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Equipment Inspection</h5>
                                <p class="mb-3">Comprehensive inspection services ensuring compliance with standards.</p>
                                <ul class="mb-3">
                                    <li>Visual & functional inspection</li>
                                    <li>Safety compliance verification</li>
                                    <li>Detailed reporting</li>
                                </ul>
                                <a href="{{ route('services.inspection') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Quality Control Inspection</h5>
                                <p class="mb-3">QC verification and process validation services.</p>
                                <ul class="mb-3">
                                    <li>Process validation</li>
                                    <li>Documentation review</li>
                                    <li>Compliance assurance</li>
                                </ul>
                                <a href="{{ route('services.inspection') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="solutions-group d-none" data-category="certification">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">System Certification</h5>
                                <p class="mb-3">Quality management system certification services.</p>
                                <ul class="mb-3">
                                    <li>ISO/IEC 17025:2005</li>
                                    <li>ISO 9001 support</li>
                                    <li>Documentation assistance</li>
                                </ul>
                                <a href="{{ route('services.certification') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Personnel Certification</h5>
                                <p class="mb-3">Technician and calibration personnel certification programs.</p>
                                <ul class="mb-3">
                                    <li>Calibration technician cert</li>
                                    <li>Advanced specialist programs</li>
                                    <li>Continuing education</li>
                                </ul>
                                <a href="{{ route('services.certification') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="solutions-group d-none" data-category="maintenance">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Preventive Maintenance</h5>
                                <p class="mb-3">Regular maintenance programs for measuring instruments.</p>
                                <ul class="mb-3">
                                    <li>Scheduled maintenance visits</li>
                                    <li>Performance verification</li>
                                    <li>Extended equipment life</li>
                                </ul>
                                <a href="{{ route('services.maintenance') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Repair Services</h5>
                                <p class="mb-3">Expert repair services for calibration equipment.</p>
                                <ul class="mb-3">
                                    <li>Fault diagnosis</li>
                                    <li>Component replacement</li>
                                    <li>Post-repair calibration</li>
                                </ul>
                                <a href="{{ route('services.maintenance') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="solutions-group d-none" data-category="training">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Calibration Fundamentals</h5>
                                <p class="mb-3">Introduction to calibration principles and best practices.</p>
                                <ul class="mb-3">
                                    <li>Measurement uncertainty</li>
                                    <li>Traceability concepts</li>
                                    <li>Documentation standards</li>
                                </ul>
                                <a href="{{ route('services.training') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card">
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">ISO/IEC 17025 Training</h5>
                                <p class="mb-3">Understanding and implementing ISO/IEC 17025:2005 requirements.</p>
                                <ul class="mb-3">
                                    <li>Standard requirements</li>
                                    <li>Quality system implementation</li>
                                    <li>Compliance strategies</li>
                                </ul>
                                <a href="{{ route('services.training') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALIBRATION SCOPE -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Calibration Scope</h2>
        <div class="row g-3">
            @foreach(['Pressure', 'Temperature / Humidity', 'Electrical', 'Electronics', 'Torque', 'Dimensional', 'Mass', 'Control Valves Calibration', 'Onsite Calibration & Commissioning', 'Acoustical'] as $scope)
            <div class="col-md-6 col-lg-4">
                <div class="card neo-card h-100">
                    <div class="card-body p-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-neo-lime me-3" style="font-size: 1.5rem;"></i>
                        <span class="fw-semibold text-neo-navy">{{ $scope }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- OUR PEOPLE -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title mb-4">Our People</h2>
                <p class="lead text-neo-navy mb-3">Young Dynamic Team</p>
                <p class="mb-4">Our highly qualified and experienced technical staff hold official ARAMCO approvals for rendering calibration services. We maintain a team of skilled engineers and technicians dedicated to delivering precise, reliable calibration and inspection services.</p>
                <p class="mb-4">Our laboratory is fully equipped with modern, highly accurate equipment and machines. We benefit from strategic location advantages for our customers and optimal environmental conditions for calibration activities.</p>
                
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="text-center p-3 rounded" style="background: var(--neo-light);">
                            <div class="fw-bold text-neo-navy fs-4">100%</div>
                            <small class="text-neo-navy">Safety Standard</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-3 rounded" style="background: var(--neo-light);">
                            <div class="fw-bold text-neo-navy fs-4">±0.05%</div>
                            <small class="text-neo-navy">Accuracy Level</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-3 rounded" style="background: var(--neo-light);">
                            <div class="fw-bold text-neo-navy fs-4">24/7</div>
                            <small class="text-neo-navy">Support Available</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-3 rounded" style="background: var(--neo-light);">
                            <div class="fw-bold text-neo-navy fs-4">Flexible</div>
                            <small class="text-neo-navy">Turnaround Time</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="card neo-card">
                    <div class="card-body p-5 text-center">
                        <i class="bi bi-people-fill text-neo-lime" style="font-size: 10rem;"></i>
                        <h5 class="text-neo-navy mt-4 mb-0">ARAMCO-Approved Team</h5>
                        <p class="text-neo-navy mt-2">Experienced Engineers & Technicians</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
@include('components.cta-section')
@endsection
