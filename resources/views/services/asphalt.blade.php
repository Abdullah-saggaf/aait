@extends('layouts.app')

@section('title', 'Asphalt Lab and Field Testing - AAIT')

@section('content')
@include('components.page-hero', [
    'title' => 'Asphalt Lab and Field Testing',
    'description' => 'Complete testing services for asphalt materials and pavements'
])

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">About Our Asphalt Testing Services</h2>
                <p class="text-muted">
                    Our asphalt testing laboratory provides comprehensive testing services for bituminous materials, 
                    asphalt mixes, and pavement structures. We ensure compliance with specifications for durable 
                    and high-performance road construction.
                </p>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Laboratory Testing Services</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Marshall Stability Testing</strong> - Mix design and stability analysis
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Bitumen Content Extraction</strong> - Asphalt binder content determination
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Bitumen Penetration Test</strong> - Consistency and hardness measurement
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Softening Point (Ring & Ball)</strong> - Temperature susceptibility
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Ductility Testing</strong> - Bitumen elongation properties
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Viscosity Testing</strong> - Absolute and kinematic viscosity
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Specific Gravity of Bitumen</strong> - Density measurements
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Flash & Fire Point</strong> - Safety temperature determination
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Air Voids Analysis</strong> - Void content in compacted specimens
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Indirect Tensile Strength</strong> - Cracking resistance evaluation
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Wheel Tracking Test</strong> - Rutting resistance assessment
                    </li>
                </ul>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Field Testing Services</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Core Sampling</strong> - Pavement core extraction and analysis
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Field Density Testing</strong> - Nuclear density gauge measurements
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Temperature Monitoring</strong> - Paving temperature control
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Layer Thickness Measurement</strong> - Pavement layer verification
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Pavement Deflection Testing</strong> - Falling weight deflectometer (FWD)
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Surface Friction Testing</strong> - Skid resistance measurement
                    </li>
                </ul>
            </div>

            <div class="neo-card">
                <h2 class="h4 mb-3 text-neo-navy">Standards & Compliance</h2>
                <p class="text-muted">Our asphalt testing services comply with international standards including:</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM D1559 - Marshall Method</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM D5 - Penetration Test</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM D36 - Softening Point</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>AASHTO T245 - Asphalt Testing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta-section')
@endsection
