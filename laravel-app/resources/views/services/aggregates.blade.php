@extends('layouts.app')

@section('title', 'Aggregates Lab and Field Testing')
@section('description', 'Complete testing services for construction aggregates including coarse and fine aggregates for concrete and asphalt applications.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Aggregates Lab and Field Testing</h1>
        <p class="lead mb-0">Essential for ensuring the quality and suitability of aggregate materials used in construction projects.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 reveal">
                <p>At Advanced Analytical Inspection Testing (AAIT), our Aggregates Lab and Field Testing services are essential for ensuring the quality and suitability of aggregate materials used in construction projects. We perform comprehensive tests on aggregates, both in the lab and on-site, to evaluate properties such as size distribution, shape, specific gravity, and moisture content. Our testing services include sieve analysis, flakiness and elongation index tests, and aggregate impact value tests, among others. These assessments provide critical data to determine the performance and durability of aggregates in concrete, asphalt, and other construction materials. With AAIT's expertise and advanced testing capabilities, clients can be confident that the aggregates used in their projects meet the highest standards of quality and performance.</p>
            </div>
            <div class="col-lg-4 reveal reveal--delay-1">
                <div class="card neo-card bg-neo-navy text-white">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Need Aggregate Testing?</h5>
                        <p>Contact us for a quote or to schedule your aggregate quality testing.</p>
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
                ['image' => 'Sieve Analysis.jpg', 'title' => 'Sieve Analysis', 'desc' => 'Particle size distribution and gradation analysis'],
                ['image' => 'Flakiness & Elongation Index.avif', 'title' => 'Flakiness & Elongation Index', 'desc' => 'Particle shape and surface characteristics testing'],
                ['image' => 'Aggregate Impact Value.jpg', 'title' => 'Aggregate Impact Value', 'desc' => 'Resistance to impact loads and toughness testing'],
                ['image' => 'Specific Gravity.jpeg', 'title' => 'Specific Gravity', 'desc' => 'Density characteristics and quality assessment'],
                ['image' => 'Moisture Content.webp', 'title' => 'Moisture Content', 'desc' => 'Water content analysis for proper mix design'],
                ['image' => 'Size Distribution.webp', 'title' => 'Size Distribution', 'desc' => 'Comprehensive gradation and sizing analysis'],
            ];
        @endphp
        
        <div class="row g-4">
            @foreach($services as $index => $service)
            <div class="col-md-6 col-lg-4 reveal reveal--delay-{{ ($index % 6) + 1 }}">
                <div class="card neo-card h-100">
                    <div class="overflow-hidden" style="height: 180px;">
                        <img src="{{ asset('images/Aggregates Testing/' . $service['image']) }}" 
                             alt="{{ $service['title'] }}" 
                             class="w-100 h-100" 
                             style="object-fit: cover;" 
                             loading="lazy" 
                             width="400" height="180">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="text-neo-navy mt-2 mb-3">{{ $service['title'] }}</h5>
                        <p class="mb-0">{{ $service['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <div class="card neo-card bg-neo-light border-0">
                    <div class="card-body p-4">
                        <p class="mb-0 text-center">With AAIT's expertise and advanced testing capabilities, clients can be confident that the aggregates used in their projects meet the highest standards of quality and performance.</p>
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
                        <h5 class="text-neo-navy mb-2">Ready to Test Your Aggregates?</h5>
                        <p class="mb-0">Contact our team for professional aggregate testing services with fast turnaround times.</p>
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
