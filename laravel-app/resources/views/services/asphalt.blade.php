@extends('layouts.app')

@section('title', 'Asphalt Lab and Field Testing')
@section('description', 'Complete testing services for asphalt materials and pavements including bitumen testing, mix design, and pavement evaluation.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Asphalt Lab and Field Testing</h1>
        <p class="lead mb-0">Ensuring the quality, durability, and performance of asphalt materials used in road construction and infrastructure projects.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 reveal">
                <p>Advanced Analytical Inspection Testing (AAIT) provides specialized Asphalt Lab and Field Testing services to ensure the quality, durability, and performance of asphalt materials used in road construction and other infrastructure projects. We perform a range of tests both in the laboratory and on-site to assess the properties of asphalt, including its composition, density, and resistance to deformation. Our services include tests such as Marshall stability, bitumen content analysis, and asphalt compaction testing. These tests deliver precise data that helps our clients optimize their asphalt mix designs and ensure that the final product meets industry standards for safety and longevity. With AAIT's comprehensive testing and expert analysis, clients can trust that their asphalt materials will perform reliably under various conditions and stresses.</p>
            </div>
            <div class="col-lg-4 reveal reveal--delay-1">
                <div class="card neo-card bg-neo-navy text-white">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Need Asphalt Testing?</h5>
                        <p>Contact us for a quote or to schedule your asphalt testing services.</p>
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
                ['image' => 'Marshall Stability.webp', 'title' => 'Marshall Stability', 'desc' => 'Mix design and stability analysis for asphalt mixtures'],
                ['image' => 'Bitumen Content Analysis.jpeg', 'title' => 'Bitumen Content Analysis', 'desc' => 'Determination of asphalt binder content in mixtures'],
                ['image' => 'Asphalt Compaction Testing.jpg', 'title' => 'Asphalt Compaction Testing', 'desc' => 'Field density and compaction quality control'],
                ['image' => 'Composition Analysis.jpg', 'title' => 'Composition Analysis', 'desc' => 'Assessment of asphalt mixture composition and properties'],
                ['image' => 'Density Testing.webp', 'title' => 'Density Testing', 'desc' => 'Measurement of asphalt density and air voids'],
                ['image' => 'Deformation Resistance.png', 'title' => 'Deformation Resistance', 'desc' => 'Performance under load and stress conditions'],
            ];
        @endphp
        
        <div class="row g-4">
            @foreach($services as $index => $service)
            <div class="col-md-6 col-lg-4 reveal reveal--delay-{{ ($index % 6) + 1 }}">
                <div class="card neo-card h-100">
                    <div class="overflow-hidden" style="height: 180px;">
                        <img src="{{ asset('images/Asphalt Testing/' . $service['image']) }}" 
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
                        <p class="mb-0 text-center">With AAIT's comprehensive testing and expert analysis, clients can trust that their asphalt materials will perform reliably under various conditions and stresses.</p>
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
                        <h5 class="text-neo-navy mb-2">Ready to Test Your Asphalt?</h5>
                        <p class="mb-0">Contact our team for professional asphalt testing and pavement evaluation services.</p>
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
