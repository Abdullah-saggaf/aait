@extends('layouts.app')

@section('title', 'Soil Lab and Field Testing - AAIT')

@section('content')
@include('components.page-hero', [
    'title' => 'Soil Lab and Field Testing',
    'description' => 'Comprehensive geotechnical testing and soil analysis services'
])

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">About Our Soil Testing Services</h2>
                <p class="text-muted">
                    Our geotechnical laboratory provides comprehensive soil testing services for construction projects, 
                    foundation design, and environmental assessments. We analyze soil properties to ensure safe and 
                    stable construction practices.
                </p>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Laboratory Testing Services</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Grain Size Analysis</strong> - Particle size distribution by sieve and hydrometer
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Atterberg Limits</strong> - Liquid limit, plastic limit, and plasticity index
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Compaction Testing</strong> - Standard and modified Proctor tests
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>California Bearing Ratio (CBR)</strong> - Soaked and unsoaked CBR testing
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Direct Shear Testing</strong> - Soil shear strength parameters
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Triaxial Testing</strong> - Unconsolidated and consolidated undrained tests
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Consolidation Testing</strong> - One-dimensional consolidation analysis
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Permeability Testing</strong> - Hydraulic conductivity measurements
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Chemical Analysis</strong> - pH, sulfate content, chloride content, organic matter
                    </li>
                </ul>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Field Testing Services</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Field Density Testing</strong> - Sand cone and nuclear density methods
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Plate Load Testing</strong> - Bearing capacity and settlement analysis
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Standard Penetration Test (SPT)</strong> - In-situ soil strength evaluation
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Cone Penetration Test (CPT)</strong> - Continuous soil profiling
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Moisture Content Determination</strong> - Field moisture testing
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Soil Sampling</strong> - Disturbed and undisturbed sampling
                    </li>
                </ul>
            </div>

            <div class="neo-card">
                <h2 class="h4 mb-3 text-neo-navy">Standards & Compliance</h2>
                <p class="text-muted">Our soil testing services comply with international standards including:</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM D422 - Grain Size Analysis</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM D698/D1557 - Compaction</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM D1883 - CBR Testing</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>BS 1377 - Soil Testing Methods</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta-section')
@endsection
