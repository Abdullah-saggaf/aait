@extends('layouts.app')

@section('title', 'Inspection Services')
@section('description', 'Professional inspection services ensuring your equipment and systems meet required standards and specifications.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Inspection Services</h1>
        <p class="lead mb-0">Comprehensive inspection services to ensure your equipment, systems, and processes meet industry standards and specifications.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <p>Our experienced inspection team provides thorough examination and verification services, ensuring compliance with safety regulations, quality standards, and operational requirements. All inspections are documented with detailed reports.</p>
            </div>
            
            <div class="col-lg-4">
                <div class="card neo-card bg-neo-navy text-neo-light">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Need Inspection?</h5>
                        <p>Schedule your inspection service today.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Request Inspection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Inspection Services</h2>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Equipment Inspection</strong>
                                <p class="small mb-0">Visual and functional inspection of instruments and equipment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Pre-Installation Inspection</strong>
                                <p class="small mb-0">Verification before equipment installation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Periodic Inspection</strong>
                                <p class="small mb-0">Regular inspection programs for ongoing compliance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Safety Inspection</strong>
                                <p class="small mb-0">Safety compliance verification and risk assessment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Quality Control Inspection</strong>
                                <p class="small mb-0">QC verification and process validation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
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
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <h3 class="text-neo-navy text-center mb-5">Inspection Process</h3>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card neo-card h-100 text-center">
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
                <div class="card neo-card h-100 text-center">
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
                <div class="card neo-card h-100 text-center">
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
                <div class="card neo-card h-100 text-center">
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
