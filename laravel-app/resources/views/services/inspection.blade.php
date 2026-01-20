@extends('layouts.app')

@section('title', 'Inspection Services')
@section('description', 'Professional inspection services ensuring your equipment and systems meet required standards and specifications.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">Inspection Services</h1>
        
        <div class="row mb-5">
            <div class="col-lg-8">
                <p class="lead">Comprehensive inspection services to ensure your equipment, systems, and processes meet industry standards and specifications.</p>
                
                <p>Our experienced inspection team provides thorough examination and verification services, ensuring compliance with safety regulations, quality standards, and operational requirements. All inspections are documented with detailed reports.</p>
                
                <h3 class="text-neo-navy mt-5 mb-3">Our Inspection Services Include:</h3>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Equipment Inspection</strong>
                                <p class="small mb-0">Visual and functional inspection of instruments and equipment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Pre-Installation Inspection</strong>
                                <p class="small mb-0">Verification before equipment installation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Periodic Inspection</strong>
                                <p class="small mb-0">Regular inspection programs for ongoing compliance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Safety Inspection</strong>
                                <p class="small mb-0">Safety compliance verification and risk assessment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Quality Control Inspection</strong>
                                <p class="small mb-0">QC verification and process validation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Documentation Review</strong>
                                <p class="small mb-0">Verification of calibration and maintenance records</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body bg-neo-navy text-neo-light">
                        <h5 class="text-neo-lime mb-3">Need Inspection?</h5>
                        <p>Schedule your inspection service today.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Request Inspection</a>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="text-neo-navy mb-3">Why Choose Our Inspection Services?</h6>
                        <ul class="small list-unstyled">
                            <li class="mb-2"><i class="bi bi-star-fill text-neo-lime me-2"></i>Experienced inspectors</li>
                            <li class="mb-2"><i class="bi bi-star-fill text-neo-lime me-2"></i>ARAMCO-approved team</li>
                            <li class="mb-2"><i class="bi bi-star-fill text-neo-lime me-2"></i>Detailed reporting</li>
                            <li class="mb-2"><i class="bi bi-star-fill text-neo-lime me-2"></i>Flexible scheduling</li>
                            <li class="mb-2"><i class="bi bi-star-fill text-neo-lime me-2"></i>Competitive pricing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <h3 class="text-neo-navy mb-4">Inspection Process</h3>
        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <div class="rounded-circle bg-neo-lime d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fs-4 fw-bold text-neo-navy">1</span>
                        </div>
                        <h6 class="text-neo-navy mt-3 mb-2">Request</h6>
                        <p class="small mb-0">Submit inspection request with details</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <div class="rounded-circle bg-neo-lime d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fs-4 fw-bold text-neo-navy">2</span>
                        </div>
                        <h6 class="text-neo-navy mt-3 mb-2">Schedule</h6>
                        <p class="small mb-0">Arrange convenient inspection time</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <div class="rounded-circle bg-neo-lime d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fs-4 fw-bold text-neo-navy">3</span>
                        </div>
                        <h6 class="text-neo-navy mt-3 mb-2">Inspect</h6>
                        <p class="small mb-0">Thorough inspection performed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body">
                        <div class="rounded-circle bg-neo-lime d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fs-4 fw-bold text-neo-navy">4</span>
                        </div>
                        <h6 class="text-neo-navy mt-3 mb-2">Report</h6>
                        <p class="small mb-0">Detailed inspection report delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
