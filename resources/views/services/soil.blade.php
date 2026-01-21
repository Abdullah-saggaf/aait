@extends('layouts.app')

@section('title', 'Soil Lab and Field Testing')
@section('description', 'Comprehensive geotechnical testing and soil analysis services for construction projects. Laboratory and field testing for soil characterization.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Soil Lab and Field Testing</h1>
        <p class="lead mb-0">Specialized services to support the foundation of successful construction and engineering projects.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 reveal">
                <p>Advanced Analytical Inspection Testing (AAIT) offers specialized Soil Lab and Field Testing services to support the foundation of successful construction and engineering projects. We conduct thorough testing and analysis of soil samples both in the laboratory and on-site, evaluating critical factors such as soil composition, density, moisture content, and load-bearing capacity. Our services include standard penetration tests (SPT), proctor compaction tests, and soil classification, among others. These tests provide essential data that helps our clients make informed decisions about site preparation, foundation design, and overall project feasibility. With our precise testing methods and experienced team, AAIT ensures that every project is built on a solid foundation, meeting all necessary standards and requirements.</p>
            </div>
            <div class="col-lg-4 reveal reveal--delay-1">
                <div class="card neo-card bg-neo-navy text-white">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Need Soil Testing?</h5>
                        <p>Contact us for a quote or to schedule your geotechnical investigation.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5 reveal">Our Testing Services</h2>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-3 reveal reveal--delay-1">
                <div class="card neo-card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-clipboard-check text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Standard Penetration Tests (SPT)</h5>
                        <p class="mb-0">In-situ testing to assess soil strength and penetration resistance</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 reveal reveal--delay-2">
                <div class="card neo-card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-hammer text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Proctor Compaction Tests</h5>
                        <p class="mb-0">Determination of optimum moisture content and maximum dry density</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 reveal reveal--delay-3">
                <div class="card neo-card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-grid-3x3 text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Soil Classification</h5>
                        <p class="mb-0">Comprehensive soil characterization and classification analysis</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 reveal reveal--delay-4">
                <div class="card neo-card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-water text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Soil Properties Analysis</h5>
                        <p class="mb-0">Testing for composition, density, moisture content, and load-bearing capacity</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <div class="card neo-card bg-neo-light border-0">
                    <div class="card-body p-4">
                        <p class="mb-0 text-center">With our precise testing methods and experienced team, AAIT ensures that every project is built on a solid foundation, meeting all necessary standards and requirements.</p>
                    </div>
                </div>
            </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="card neo-card bg-neo-light border-0">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5 class="text-neo-navy mb-2">Ready for Geotechnical Investigation?</h5>
                        <p class="mb-0">Contact our team for professional soil testing and geotechnical engineering services.</p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <a href="{{ route('contact.index') }}" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
