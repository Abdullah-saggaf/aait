@extends('layouts.app')

@section('title', 'Aggregates Lab and Field Testing - AAIT')

@section('content')
@include('components.page-hero', [
    'title' => 'Aggregates Lab and Field Testing',
    'description' => 'Complete testing services for construction aggregates'
])

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">About Our Aggregates Testing Services</h2>
                <p class="text-muted">
                    Our aggregates testing laboratory ensures that coarse and fine aggregates meet quality standards 
                    for use in concrete, asphalt, and other construction applications. We provide comprehensive testing 
                    for physical and mechanical properties.
                </p>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Laboratory Testing Services</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Sieve Analysis</strong> - Particle size distribution and gradation
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Specific Gravity & Absorption</strong> - Bulk and apparent specific gravity
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Los Angeles Abrasion</strong> - Resistance to degradation and wear
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Aggregate Crushing Value (ACV)</strong> - Resistance to crushing under load
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Aggregate Impact Value (AIV)</strong> - Resistance to sudden impact
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Soundness Testing</strong> - Sodium and magnesium sulfate soundness
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Flakiness & Elongation Index</strong> - Particle shape characteristics
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Clay Lumps & Friable Particles</strong> - Deleterious materials content
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Organic Impurities</strong> - Colorimetric test for organic content
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Sand Equivalent</strong> - Clay content in fine aggregates
                    </li>
                </ul>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Field Testing Services</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Field Sampling</strong> - Representative aggregate sampling from stockpiles
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Field Moisture Content</strong> - Surface moisture determination
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Visual Inspection</strong> - Quality assessment and contamination check
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Quarry Inspection</strong> - Source material quality verification
                    </li>
                </ul>
            </div>

            <div class="neo-card">
                <h2 class="h4 mb-3 text-neo-navy">Standards & Compliance</h2>
                <p class="text-muted">Our aggregates testing services comply with international standards including:</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM C136 - Sieve Analysis</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM C127/C128 - Specific Gravity</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM C131 - LA Abrasion</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>BS 812 - Aggregate Testing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta-section')
@endsection
