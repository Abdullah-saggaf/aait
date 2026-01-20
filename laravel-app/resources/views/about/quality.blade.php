@extends('layouts.app')

@section('title', 'Quality Policy')
@section('description', 'Our quality policy ensures ISO/IEC 17025:2005 compliance with full traceability and ARAMCO-approved procedures.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">Quality Policy</h1>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg mb-5 bg-neo-navy text-neo-light">
                    <div class="card-body p-5">
                        <h3 class="text-neo-lime mb-4">Our Quality Commitment</h3>
                        <p class="lead">National Engineering Organization is committed to providing calibration services that meet the highest international standards while maintaining customer satisfaction through accuracy, reliability, and timely delivery.</p>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mb-4">Quality Standards & Compliance</h3>
                
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-patch-check text-neo-lime me-2"></i>ISO/IEC 17025:2005 Alignment</h5>
                        <p>Our calibration practices and procedures are aligned with ISO/IEC 17025:2005, the international standard for testing and calibration laboratories.</p>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-diagram-3 text-neo-lime me-2"></i>Full Traceability</h5>
                        <p>All calibrations are traceable to:</p>
                        <ul>
                            <li><strong>NIST</strong> - National Institute of Standards and Technology</li>
                            <li><strong>NPL (UK)</strong> - National Physical Laboratories</li>
                            <li><strong>PTB</strong> - Physikalisch-Technische Bundesanstalt</li>
                            <li>Other recognized national laboratories</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-people text-neo-lime me-2"></i>ARAMCO-Approved Personnel</h5>
                        <p>Our highly qualified technical staff hold official ARAMCO approvals for rendering calibration services, ensuring expertise and reliability.</p>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mb-4 mt-5">Quality Principles</h3>
                
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy fw-bold">Accuracy</h6>
                                <p class="mb-0 small">Modern, highly accurate equipment and machines for precise measurements</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy fw-bold">Reliability</h6>
                                <p class="mb-0 small">Consistent procedures and experienced staff ensure dependable results</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy fw-bold">Competitiveness</h6>
                                <p class="mb-0 small">Quality service at competitive prices that provide value</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0" style="background: rgba(176, 210, 54, 0.1);">
                            <div class="card-body">
                                <h6 class="text-neo-navy fw-bold">Flexibility</h6>
                                <p class="mb-0 small">Turnaround times adapted to client demand and requirements</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mb-4 mt-5">Laboratory Equipment</h3>
                <p>Our laboratory is fully equipped with modern, highly accurate equipment and machines, maintained and calibrated regularly to ensure optimal performance and measurement accuracy.</p>
                
                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body bg-neo-light">
                        <h5 class="text-neo-navy"><i class="bi bi-shield-check text-neo-lime me-2"></i>Continuous Improvement</h5>
                        <p class="mb-0">We are committed to continually improving our quality management system, updating our equipment, and training our staff to maintain the highest standards of calibration services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
