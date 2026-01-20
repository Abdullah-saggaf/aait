@extends('layouts.app')

@section('title', 'Personal Certification')
@section('description', 'Certification programs for technicians and personnel validating competency and adherence to calibration standards.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">Personal Certification</h1>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p class="lead">Certification programs for technicians and personnel, validating competency and adherence to calibration and measurement standards.</p>
                
                <h3 class="text-neo-navy mt-5 mb-3">What is Personal Certification?</h3>
                <p>Personal certification validates that technicians and calibration personnel possess the knowledge, skills, and competency required to perform calibration and measurement activities according to established standards and procedures.</p>
                
                <h3 class="text-neo-navy mt-5 mb-3">Certification Programs</h3>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="text-neo-navy"><i class="bi bi-award text-neo-lime me-2"></i>Calibration Technician</h5>
                                <p class="small">Certification for personnel performing calibration of measuring instruments.</p>
                                <ul class="small">
                                    <li>Basic metrology</li>
                                    <li>Calibration procedures</li>
                                    <li>Documentation</li>
                                    <li>Quality standards</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="text-neo-navy"><i class="bi bi-trophy text-neo-lime me-2"></i>Senior Calibration Specialist</h5>
                                <p class="small">Advanced certification for experienced calibration professionals.</p>
                                <ul class="small">
                                    <li>Advanced metrology</li>
                                    <li>Measurement uncertainty</li>
                                    <li>Procedure development</li>
                                    <li>Quality management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mt-5 mb-3">Certification Requirements</h3>
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <div class="card border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy"><i class="bi bi-check-circle text-neo-lime me-2"></i>Training</h6>
                                <p class="small mb-0">Completion of required training programs and courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy"><i class="bi bi-check-circle text-neo-lime me-2"></i>Experience</h6>
                                <p class="small mb-0">Documented work experience in calibration and measurement</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy"><i class="bi bi-check-circle text-neo-lime me-2"></i>Assessment</h6>
                                <p class="small mb-0">Successful completion of written and practical examinations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy"><i class="bi bi-check-circle text-neo-lime me-2"></i>Renewal</h6>
                                <p class="small mb-0">Periodic recertification and continuing education</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mt-5 mb-3">Benefits of Personal Certification</h3>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="bi bi-star-fill text-neo-lime me-2"></i> <strong>Professional recognition</strong> of competency and expertise</li>
                    <li class="mb-3"><i class="bi bi-star-fill text-neo-lime me-2"></i> <strong>Career advancement</strong> opportunities</li>
                    <li class="mb-3"><i class="bi bi-star-fill text-neo-lime me-2"></i> <strong>Increased confidence</strong> from employers and clients</li>
                    <li class="mb-3"><i class="bi bi-star-fill text-neo-lime me-2"></i> <strong>Standardized knowledge</strong> and best practices</li>
                    <li class="mb-3"><i class="bi bi-star-fill text-neo-lime me-2"></i> <strong>Compliance assurance</strong> for organizations</li>
                </ul>
                
                <div class="card border-0 shadow-sm mt-5 bg-neo-light">
                    <div class="card-body p-4">
                        <h5 class="text-neo-navy mb-3">Interested in Personal Certification?</h5>
                        <p class="mb-3">Contact us to learn more about our certification programs and requirements.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
