@extends('layouts.app')

@section('title', 'Water Lab Testing')
@section('description', 'Comprehensive water quality testing and analysis services for potable water, concrete mixing water, and wastewater.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Water Lab Testing</h1>
        <p class="lead mb-0">Assessing the quality and suitability of water used in construction and industrial processes.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 reveal">
                <p>Advanced Analytical Inspection Testing (AAIT) offers Water Lab Testing services to assess the quality and suitability of water used in construction and industrial processes. Our comprehensive testing ensures that water meets the required standards for various applications, including mixing concrete, curing, and other site-specific needs. We conduct a wide range of tests, including pH level, hardness, alkalinity, and contamination analysis, to provide detailed insights into the water's properties. Our precise testing methods and advanced laboratory equipment help clients ensure that the water used in their projects contributes to the desired outcomes and adheres to industry standards. With AAIT's Water Lab Testing services, clients can be assured of the quality and compliance of water in their construction and operational processes.</p>
            </div>
            <div class="col-lg-4 reveal reveal--delay-1">
                <div class="card neo-card bg-neo-navy text-white">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Need Water Testing?</h5>
                        <p>Contact us for a quote or to schedule your water quality testing.</p>
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
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 reveal reveal--delay-1">
                <div class="card neo-card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-droplet-half text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">pH Level Testing</h5>
                        <p class="mb-0">Acidity and alkalinity measurement</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 reveal reveal--delay-2">
                <div class="card neo-card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-bar-chart text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Hardness Testing</h5>
                        <p class="mb-0">Total hardness and mineral content</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 reveal reveal--delay-3">
                <div class="card neo-card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-water text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Alkalinity Analysis</h5>
                        <p class="mb-0">Water buffering capacity assessment</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 reveal reveal--delay-4">
                <div class="card neo-card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-shield-x text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Contamination Analysis</h5>
                        <p class="mb-0">Detection of impurities and contaminants</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12">
                <div class="card neo-card bg-white border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="text-neo-navy mb-4 text-center">Applications</h5>
                        <div class="row text-center">
                            <div class="col-md-4">
                                <i class="bi bi-building text-neo-lime" style="font-size: 2rem;"></i>
                                <p class="mt-2 mb-0"><strong>Concrete Mixing</strong></p>
                            </div>
                            <div class="col-md-4">
                                <i class="bi bi-droplet text-neo-lime" style="font-size: 2rem;"></i>
                                <p class="mt-2 mb-0"><strong>Curing Water</strong></p>
                            </div>
                            <div class="col-md-4">
                                <i class="bi bi-gear-wide-connected text-neo-lime" style="font-size: 2rem;"></i>
                                <p class="mt-2 mb-0"><strong>Industrial Processes</strong></p>
                            </div>
                        </div>
                    </div>
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
                        <h5 class="text-neo-navy mb-2">Ready for Water Quality Testing?</h5>
                        <p class="mb-0">Contact our team for professional water testing and analysis services.</p>
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
