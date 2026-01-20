@extends('layouts.app')

@section('title', 'Our Aim & Mission')
@section('description', 'Our mission is to provide consistent quality calibration services at competitive prices with flexible turnaround times.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">Our Aim & Mission</h1>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-5">
                        <h3 class="text-neo-navy mb-4">Our Core Mission</h3>
                        <p class="lead">To deliver consistent quality calibration services at competitive prices with flexible turnaround times based on client demand.</p>
                    </div>
                </div>
                
                <h3 class="text-neo-navy mb-4">Our Aims</h3>
                
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-award-fill text-neo-lime" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-neo-navy">Consistent Quality</h5>
                                <p>Maintain the highest standards of quality in all our calibration and inspection services, adhering to ISO/IEC-17025:2005 guidelines.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-cash-stack text-neo-lime" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-neo-navy">Competitive Pricing</h5>
                                <p>Provide cost-effective solutions that deliver value to our clients without compromising on quality or accuracy.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-clock-history text-neo-lime" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-neo-navy">Flexible Turnaround</h5>
                                <p>Adapt our service timelines to meet client requirements, from urgent calibrations to scheduled maintenance programs.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-people-fill text-neo-lime" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-neo-navy">Client Satisfaction</h5>
                                <p>Build long-term relationships with our clients by understanding and exceeding their calibration needs.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-arrow-repeat text-neo-lime" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-neo-navy">Full Traceability</h5>
                                <p>Ensure all calibrations are traceable to international standards (NIST, NPL, PTB) for complete confidence.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-gear-wide-connected text-neo-lime" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-neo-navy">Continuous Improvement</h5>
                                <p>Invest in modern equipment and staff training to stay at the forefront of calibration technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-info border-0 mt-5" style="background: rgba(176, 210, 54, 0.1);">
                    <h5 class="text-neo-navy"><i class="bi bi-info-circle me-2"></i>Our Commitment</h5>
                    <p class="mb-0">We are committed to serving small, medium, and large scale industries across Saudi Arabia, including our valued partnership with Saudi Aramco, with the same dedication to quality and precision in every calibration we perform.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
