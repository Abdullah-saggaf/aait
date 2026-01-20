@extends('layouts.app')

@section('title', 'About Us')
@section('description', 'National Engineering Organization provides ISO/IEC 17025:2005 calibration services across Saudi Arabia. Established 2005, serving Saudi Aramco and major industries.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">About Us</h1>
        
        <div class="row mb-5">
            <div class="col-lg-8">
                <p class="lead">National Engineering Organization provides comprehensive calibration services for Mechanical, Electro-Technical, and Thermal measuring & source instruments, aligned with ISO/IEC-17025:2005 standards.</p>
                
                <h3 class="text-neo-navy mt-4 mb-3">Our History</h3>
                <p>Originally established in <strong>2005</strong> as a family-owned firm working exclusively for Saudi Aramco under the name Metals Services Company. On <strong>24 April 2014</strong>, National Engineering Organization was established as a Proprietorship Organization under new ownership.</p>
                
                <p>Today, we are a wholly owned Saudi Arabian organization serving small, medium, and large scale industries across the Kingdom of Saudi Arabia, including our continued partnership with Saudi Aramco.</p>
                
                <h3 class="text-neo-navy mt-4 mb-3">Our Expertise</h3>
                <p>Our team consists of highly qualified technical staff with <strong>ARAMCO approvals</strong> for rendering calibration services. Our laboratory is fully equipped with modern, highly accurate equipment and machines to ensure precise measurements and reliable results.</p>
                
                <h3 class="text-neo-navy mt-4 mb-3">Traceability & Standards</h3>
                <p>All our calibrations are traceable to internationally recognized standards:</p>
                <ul>
                    <li><strong>NIST</strong> - National Institute of Standards and Technology</li>
                    <li><strong>NPL</strong> - National Physical Laboratories (UK)</li>
                    <li><strong>PTB</strong> - Physikalisch-Technische Bundesanstalt</li>
                    <li>Other national laboratories</li>
                </ul>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body bg-neo-navy" style="color: white;">
                        <h5 class="text-neo-lime mb-3">Quick Facts</h5>
                        <ul class="list-unstyled" style="color: white;">
                            <li class="mb-2"><i class="bi bi-calendar3 text-neo-lime me-2"></i> Established: 2005</li>
                            <li class="mb-2"><i class="bi bi-building text-neo-lime me-2"></i> Reorganized: April 24, 2014</li>
                            <li class="mb-2"><i class="bi bi-patch-check text-neo-lime me-2"></i> ISO/IEC 17025:2005</li>
                            <li class="mb-2"><i class="bi bi-geo-alt text-neo-lime me-2"></i> Saudi Arabia</li>
                            <li class="mb-2"><i class="bi bi-people text-neo-lime me-2"></i> ARAMCO Approved</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy mb-3">Industries We Serve</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> Oil & Gas</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> Petrochemical</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> Manufacturing</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> Power Generation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> Mining</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> Water Treatment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-bullseye text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="card-title text-neo-navy mt-3">Our Mission</h5>
                        <p class="card-text">Learn about our aims and mission</p>
                        <a href="{{ route('about.mission') }}" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-shield-check text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="card-title text-neo-navy mt-3">Quality Policy</h5>
                        <p class="card-text">Our commitment to quality</p>
                        <a href="{{ route('about.quality') }}" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-chat-dots text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="card-title text-neo-navy mt-3">Contact Us</h5>
                        <p class="card-text">Get in touch with our team</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-outline-primary">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
