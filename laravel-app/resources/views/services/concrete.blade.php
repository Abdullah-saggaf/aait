@extends('layouts.app')

@section('title', 'Concrete Lab and Field Testing')
@section('description', 'Comprehensive concrete testing services for quality control and compliance. Laboratory and field testing for fresh and hardened concrete.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Concrete Lab and Field Testing</h1>
        <p class="lead mb-0">Designed to ensure the highest standards of quality and durability for construction projects.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 reveal">
                <p>At Advanced Analytical Inspection Testing (AAIT), our Concrete Lab and Field Testing services are designed to ensure the highest standards of quality and durability for construction projects. We conduct comprehensive tests on concrete materials, both in the laboratory and on-site, to assess their strength, composition, and performance under various conditions. Our testing services include compressive strength tests, mix design evaluations, slump tests, and more, providing our clients with precise data to ensure their concrete structures meet industry standards and project specifications. With state-of-the-art equipment and a team of skilled professionals, AAIT delivers reliable results that contribute to the success and safety of every project.</p>
            </div>
            <div class="col-lg-4 reveal reveal--delay-1">
                <div class="card neo-card bg-neo-navy text-white">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Need Testing Services?</h5>
                        <p>Contact us for a quote or to schedule your concrete testing.</p>
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
                ['image' => 'Compressive Strength Tests.jpg', 'title' => 'Compressive Strength Tests', 'desc' => 'Standard testing to assess concrete strength and quality'],
                ['image' => 'Ceconcrete Mix Design Evaluationsg.png', 'title' => 'Mix Design Evaluations', 'desc' => 'Optimization of concrete mix designs for project requirements'],
                ['image' => 'Slump Tests.webp', 'title' => 'Slump Tests', 'desc' => 'Workability and consistency testing for fresh concrete'],
            ];
        @endphp
        
        <div class="row g-4 justify-content-center">
            @foreach($services as $index => $service)
            <div class="col-md-6 col-lg-4 reveal reveal--delay-{{ $index + 1 }}">
                <div class="card neo-card h-100">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Concrete Testing/' . $service['image']) }}" 
                             alt="{{ $service['title'] }}" 
                             class="w-100 h-100" 
                             style="object-fit: cover;" 
                             loading="lazy" 
                             width="400" height="200">
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
                        <p class="mb-0 text-center">With state-of-the-art equipment and a team of skilled professionals, AAIT delivers reliable results that contribute to the success and safety of every project.</p>
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
                        <h5 class="text-neo-navy mb-2">Ready to Test Your Concrete?</h5>
                        <p class="mb-0">Contact our team for professional concrete testing services with fast turnaround times.</p>
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
