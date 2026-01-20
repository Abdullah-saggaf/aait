@extends('layouts.app')

@section('title', 'Equipment Certification')
@section('description', 'Certification of measuring instruments and equipment verifying accuracy, compliance, and proper calibration status.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">Equipment Certification</h1>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p class="lead">Certification of measuring instruments and equipment, verifying accuracy, compliance with standards, and proper calibration status.</p>
                
                <h3 class="text-neo-navy mt-5 mb-3">What is Equipment Certification?</h3>
                <p>Equipment certification provides formal verification that measuring instruments and calibration equipment meet specified accuracy requirements, comply with relevant standards, and maintain proper calibration status. This ensures reliability and traceability of measurements.</p>
                
                <h3 class="text-neo-navy mt-5 mb-3">Certification Process</h3>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <div class="fw-bold text-neo-navy mb-2">1. Initial Assessment</div>
                                <p class="small mb-0">Review equipment specifications and requirements</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <div class="fw-bold text-neo-navy mb-2">2. Calibration</div>
                                <p class="small mb-0">Perform comprehensive calibration procedures</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <div class="fw-bold text-neo-navy mb-2">3. Verification</div>
                                <p class="small mb-0">Verify compliance with accuracy requirements</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <div class="fw-bold text-neo-navy mb-2">4. Certification</div>
                                <p class="small mb-0">Issue certification documentation</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mt-5 mb-3">Equipment Types</h3>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Pressure Instruments</strong>
                                <p class="small mb-0">Gauges, transmitters, calibrators</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Temperature Instruments</strong>
                                <p class="small mb-0">Thermometers, sensors, baths</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Electrical Instruments</strong>
                                <p class="small mb-0">Multimeters, analyzers, meters</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-neo-lime me-2 mt-1"></i>
                            <div>
                                <strong>Dimensional Instruments</strong>
                                <p class="small mb-0">Calipers, micrometers, gauges</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mt-5 mb-3">Certification Documentation</h3>
                <p>Our equipment certification includes:</p>
                <ul>
                    <li>Calibration certificate with traceability</li>
                    <li>Measurement uncertainty statement</li>
                    <li>Compliance verification report</li>
                    <li>Certification seal/label</li>
                    <li>Next calibration due date</li>
                </ul>
                
                <div class="card border-0 shadow-sm mt-5 bg-neo-navy text-neo-light">
                    <div class="card-body p-4">
                        <h5 class="text-neo-lime mb-3">Need Equipment Certification?</h5>
                        <p class="mb-3">Contact us to certify your measuring instruments and equipment.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
