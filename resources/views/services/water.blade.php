@extends('layouts.app')

@section('title', 'Water Lab Testing - AAIT')

@section('content')
@include('components.page-hero', [
    'title' => 'Water Lab Testing',
    'description' => 'Comprehensive water quality testing and analysis services'
])

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">About Our Water Testing Services</h2>
                <p class="text-muted">
                    Our water testing laboratory provides comprehensive analysis services for potable water, mixing water 
                    for concrete, wastewater, and environmental water samples. We ensure water quality meets health, 
                    safety, and construction standards.
                </p>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Physical Testing</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Color & Turbidity</strong> - Visual water quality assessment
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Total Dissolved Solids (TDS)</strong> - Dissolved mineral content
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Total Suspended Solids (TSS)</strong> - Suspended particle measurement
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Electrical Conductivity</strong> - Dissolved ion concentration
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Temperature & Odor</strong> - Basic quality parameters
                    </li>
                </ul>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Chemical Testing</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>pH Value</strong> - Acidity and alkalinity measurement
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Chloride Content</strong> - Corrosion potential assessment
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Sulfate Content</strong> - Concrete durability evaluation
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Alkalinity</strong> - Carbonate and bicarbonate content
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Hardness (Total & Calcium)</strong> - Mineral hardness determination
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Heavy Metals</strong> - Lead, iron, copper, zinc analysis
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Dissolved Oxygen (DO)</strong> - Oxygen content measurement
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Chemical Oxygen Demand (COD)</strong> - Organic pollution indicator
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Biochemical Oxygen Demand (BOD)</strong> - Biodegradable organic matter
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Nitrates & Phosphates</strong> - Nutrient content analysis
                    </li>
                </ul>
            </div>

            <div class="neo-card mb-4">
                <h2 class="h4 mb-3 text-neo-navy">Specialized Testing</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Concrete Mixing Water</strong> - ASTM C1602 suitability testing
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Potable Water Analysis</strong> - Drinking water quality standards
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Wastewater Analysis</strong> - Effluent quality monitoring
                    </li>
                    <li class="list-group-item px-0">
                        <i class="bi bi-check-circle text-neo-lime me-2"></i>
                        <strong>Seawater Analysis</strong> - Marine environment testing
                    </li>
                </ul>
            </div>

            <div class="neo-card">
                <h2 class="h4 mb-3 text-neo-navy">Standards & Compliance</h2>
                <p class="text-muted">Our water testing services comply with international standards including:</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>ASTM C1602 - Mixing Water</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>WHO Guidelines - Drinking Water</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>APHA Standard Methods</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-check text-neo-lime fs-4 me-2"></i>
                            <span>EPA Water Quality Standards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta-section')
@endsection
