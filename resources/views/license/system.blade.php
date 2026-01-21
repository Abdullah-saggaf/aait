@extends('layouts.app')

@section('title', 'System Certification')
@section('description', 'Quality management system certification ensuring compliance with ISO and industry standards.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">System Certification</h1>
        <p class="lead mb-0">Certification of quality management systems and operational procedures to ensure compliance with ISO and industry-specific standards.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p class="lead">Certification of quality management systems and operational procedures to ensure compliance with ISO and industry-specific standards.</p>
                
                <h3 class="text-neo-navy mt-5 mb-3">What is System Certification?</h3>
                <p>System certification verifies that an organization's quality management system, operational procedures, and processes meet specified standards and requirements. This demonstrates commitment to quality and provides confidence to stakeholders and clients.</p>
                
                <h3 class="text-neo-navy mt-5 mb-3">Standards We Support</h3>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="text-neo-navy"><i class="bi bi-patch-check text-neo-lime me-2"></i>ISO/IEC 17025:2005</h5>
                                <p class="small mb-0">General requirements for the competence of testing and calibration laboratories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="text-neo-navy"><i class="bi bi-patch-check text-neo-lime me-2"></i>ISO 9001</h5>
                                <p class="small mb-0">Quality management systems requirements</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mt-5 mb-3">Benefits of System Certification</h3>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> <strong>Enhanced credibility</strong> and market recognition</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> <strong>Improved processes</strong> and operational efficiency</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> <strong>Compliance assurance</strong> with regulatory requirements</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> <strong>Customer confidence</strong> and trust</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-neo-lime me-2"></i> <strong>Competitive advantage</strong> in the marketplace</li>
                </ul>
                
                <!-- Certificate Validation Demo -->
                <div class="card neo-card">
                    <div class="card-body p-4">
                        <h5 class="text-neo-navy mb-3"><i class="bi bi-shield-check text-neo-lime me-2"></i>Validate System Certificate</h5>
                        <p class="mb-3">Enter the certificate ID to verify authenticity (Demo Feature)</p>
                        <div class="row g-3">
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Enter Certificate ID (e.g. SYS-2024-00123)" id="certId">
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary w-100 validate-certificate-btn">
                                    <i class="bi bi-search me-2"></i>Validate
                                </button>
                            </div>
                        </div>
                        <div class="validation-alert-container"></div>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm mt-4 bg-neo-light">
                    <div class="card-body p-4">
                        <h5 class="text-neo-navy mb-3">Learn More About System Certification</h5>
                        <p class="mb-3">Contact us to discuss your system certification needs and requirements.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
