@extends('layouts.app')

@section('title', 'Concrete Lab and Field Testing - AAIT')

@section('content')
@include('components.page-hero', [
    'title' => 'Concrete Lab and Field Testing',
    'description' => 'Comprehensive testing services for concrete materials and structures'
])

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">About Our Concrete Testing Services</h2>
                <p class="text-muted">
                    Our concrete testing laboratory provides comprehensive quality control and compliance testing services 
                    for concrete materials, fresh concrete, and hardened concrete structures. We ensure your concrete meets 
                    all required specifications and standards.
                </p>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Laboratory Testing Services</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Compressive Strength Testing</strong> - Testing of concrete cubes and cylinders
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Flexural Strength Testing</strong> - Beam testing for flexural properties
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Split Tensile Strength</strong> - Indirect tensile testing of cylinders
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Concrete Mix Design</strong> - Development and optimization of concrete mixes
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Permeability Testing</strong> - Water penetration and permeability analysis
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Durability Testing</strong> - Chloride penetration, sulfate resistance, freeze-thaw
                    </li>
                </ul>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Field Testing Services</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Slump Test</strong> - Fresh concrete workability testing
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Air Content Testing</strong> - Air void analysis in fresh concrete
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Temperature Monitoring</strong> - Fresh concrete temperature measurement
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Core Drilling</strong> - Extraction and testing of concrete cores
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Rebound Hammer Testing</strong> - Non-destructive strength assessment
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Ultrasonic Pulse Velocity</strong> - Concrete quality and uniformity assessment
                    </li>
                </ul>
            </div>

            <div class="neo-card">
                <h2 class="h4 mb-3 text-neo-navy">Standards & Compliance</h2>
                <p class="text-muted">Our concrete testing services comply with international standards including:</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM C39 - Compressive Strength</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM C143 - Slump Test</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>BS EN 12390 - Testing Hardened Concrete</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ACI 318 - Building Code Requirements</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta-section')
@endsection
