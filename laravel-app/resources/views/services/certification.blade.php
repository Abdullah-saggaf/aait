@extends('layouts.app')

@section('title', 'Certification Services')
@section('description', 'System, equipment, and personal certification services ensuring compliance with industry standards.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">Certification Services</h1>
        
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <p class="lead text-center">Professional certification services for systems, equipment, and personnel, ensuring compliance with industry standards and regulations.</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-diagram-3 text-neo-lime" style="font-size: 3.5rem;"></i>
                        <h4 class="text-neo-navy mt-3 mb-3">System Certification</h4>
                        <p>Certification of quality management systems and operational procedures to ensure compliance with ISO and industry standards.</p>
                        <a href="{{ route('license.system') }}" class="btn btn-outline-primary mt-2">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-gear-wide-connected text-neo-lime" style="font-size: 3.5rem;"></i>
                        <h4 class="text-neo-navy mt-3 mb-3">Equipment Certification</h4>
                        <p>Certification of measuring instruments and equipment, verifying accuracy, compliance, and proper calibration status.</p>
                        <a href="{{ route('license.equipment') }}" class="btn btn-outline-primary mt-2">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-person-badge text-neo-lime" style="font-size: 3.5rem;"></i>
                        <h4 class="text-neo-navy mt-3 mb-3">Personal Certification</h4>
                        <p>Certification programs for technicians and personnel, validating competency and adherence to standards.</p>
                        <a href="{{ route('license.personal') }}" class="btn btn-outline-primary mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-neo-navy mb-4">Benefits of Certification</h3>
                
                <div class="row g-3 mb-5">
                    <div class="col-md-6">
                        <div class="card border-0 h-100" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy"><i class="bi bi-shield-check text-neo-lime me-2"></i>Compliance Assurance</h6>
                                <p class="small mb-0">Demonstrates adherence to industry standards and regulatory requirements</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 h-100" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy"><i class="bi bi-trophy text-neo-lime me-2"></i>Enhanced Credibility</h6>
                                <p class="small mb-0">Increases trust and confidence among clients and stakeholders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 h-100" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy"><i class="bi bi-graph-up text-neo-lime me-2"></i>Quality Improvement</h6>
                                <p class="small mb-0">Promotes continuous improvement in processes and operations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 h-100" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy"><i class="bi bi-globe text-neo-lime me-2"></i>Market Access</h6>
                                <p class="small mb-0">Opens opportunities for contracts requiring certified systems/personnel</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm bg-neo-navy text-neo-light">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="text-neo-lime mb-2">Need Certification Services?</h5>
                                <p class="mb-0">Contact us to discuss your certification requirements and how we can help.</p>
                            </div>
                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                <a href="{{ route('contact.index') }}" class="btn btn-primary">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
