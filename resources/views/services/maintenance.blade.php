@extends('layouts.app')

@section('title', 'Maintenance & Repair Services')
@section('description', 'Expert maintenance and repair services for measuring instruments and calibration equipment.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Maintenance & Repair Services</h1>
        <p class="lead mb-0">Professional maintenance and repair services for measuring instruments, ensuring optimal performance and extended equipment life.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <p>Our experienced technicians provide expert maintenance and repair services for a wide range of measuring instruments and calibration equipment. We use genuine parts and follow manufacturer specifications to ensure quality repairs.</p>
            </div>
            
            <div class="col-lg-4">
                <div class="card neo-card bg-neo-navy text-neo-light">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Need Repair Service?</h5>
                        <p>Contact us for maintenance or repair of your equipment.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Request Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h3 class="text-neo-navy text-center mb-5">Our Services Include</h3>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-tools text-neo-lime me-2"></i>Preventive Maintenance</h5>
                        <ul class="small">
                            <li>Regular maintenance programs</li>
                            <li>Performance verification</li>
                            <li>Cleaning and adjustment</li>
                            <li>Component replacement</li>
                            <li>Firmware updates</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-wrench text-neo-lime me-2"></i>Corrective Repairs</h5>
                        <ul class="small">
                            <li>Fault diagnosis</li>
                            <li>Component repair/replacement</li>
                            <li>Calibration after repair</li>
                            <li>Performance testing</li>
                            <li>Documentation</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-arrow-clockwise text-neo-lime me-2"></i>Refurbishment</h5>
                        <ul class="small">
                            <li>Complete overhaul</li>
                            <li>Cosmetic restoration</li>
                            <li>Upgrade services</li>
                            <li>Performance optimization</li>
                            <li>Extended warranty options</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card neo-card h-100">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-calendar-check text-neo-lime me-2"></i>Maintenance Contracts</h5>
                        <ul class="small">
                            <li>Annual maintenance agreements</li>
                            <li>Priority service</li>
                            <li>Scheduled visits</li>
                            <li>Discounted rates</li>
                            <li>Emergency support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <h3 class="text-neo-navy text-center mb-5">Why Choose Our Maintenance Services?</h3>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="text-center">
                    <i class="bi bi-people text-neo-lime" style="font-size: 3rem;"></i>
                    <h6 class="text-neo-navy mt-3">Expert Technicians</h6>
                    <p class="small">ARAMCO-approved and experienced</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <i class="bi bi-speedometer2 text-neo-lime" style="font-size: 3rem;"></i>
                    <h6 class="text-neo-navy mt-3">Quick Turnaround</h6>
                    <p class="small">Flexible scheduling to minimize downtime</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <i class="bi bi-shield-check text-neo-lime" style="font-size: 3rem;"></i>
                    <h6 class="text-neo-navy mt-3">Quality Assurance</h6>
                    <p class="small">All repairs tested and calibrated</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <i class="bi bi-cash-coin text-neo-lime" style="font-size: 3rem;"></i>
                    <h6 class="text-neo-navy mt-3">Competitive Pricing</h6>
                    <p class="small">Fair rates for quality service</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
