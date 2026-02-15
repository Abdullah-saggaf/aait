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
        
        @php
            $services = [
                ['image' => 'pH Level Testing.jpg', 'title' => 'pH Level Testing', 'desc' => 'Acidity and alkalinity measurement'],
                ['image' => 'Hardness Testing.webp', 'title' => 'Hardness Testing', 'desc' => 'Total hardness and mineral content'],
                ['image' => 'Alkalinity Analysis.webp', 'title' => 'Alkalinity Analysis', 'desc' => 'Water buffering capacity assessment'],
                ['image' => 'Contamination Analysis.jpg', 'title' => 'Contamination Analysis', 'desc' => 'Detection of impurities and contaminants'],
            ];
        @endphp
        
        <div class="row g-4">
            @foreach($services as $index => $service)
            <div class="col-md-6 col-lg-3 reveal reveal--delay-{{ $index + 1 }}">
                <div class="card neo-card h-100">
                    <div class="overflow-hidden" style="height: 160px;">
                        <img src="{{ asset('images/Water Testing/' . $service['image']) }}" 
                             alt="{{ $service['title'] }}" 
                             class="w-100 h-100" 
                             style="object-fit: cover;" 
                             loading="lazy" 
                             width="300" height="160">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-neo-navy mt-2 mb-3">{{ $service['title'] }}</h5>
                        <p class="mb-0">{{ $service['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
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
