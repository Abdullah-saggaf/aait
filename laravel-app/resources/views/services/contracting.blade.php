@extends('layouts.app')

@section('title', 'General Contracting')
@section('description', 'Reliable and high-quality General Contracting services tailored to project requirements across planning, coordination, and execution.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">General Contracting</h1>
        <p class="lead mb-0">Comprehensive project management and construction services tailored to your needs.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 reveal">
                <p class="lead">We provide reliable and high-quality General Contracting services tailored to project requirements across planning, coordination, and execution.</p>
                <p>For more information about scope, timelines, and project support, please contact us.</p>
            </div>
            <div class="col-lg-4 reveal reveal--delay-1">
                <div class="card neo-card bg-neo-navy text-white">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Interested in Our Services?</h5>
                        <p>Contact us to discuss your project requirements and how we can support you.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 reveal reveal--delay-1">
                <div class="card neo-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-clipboard-check text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Project Planning</h5>
                        <p class="mb-0">Comprehensive planning and feasibility assessments for your projects.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal reveal--delay-2">
                <div class="card neo-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-people text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Coordination</h5>
                        <p class="mb-0">Seamless coordination between all project stakeholders and teams.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal reveal--delay-3">
                <div class="card neo-card h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-gear-wide-connected text-neo-lime" style="font-size: 3rem;"></i>
                        <h5 class="text-neo-navy mt-3 mb-3">Execution</h5>
                        <p class="mb-0">Professional execution ensuring quality, safety, and timely delivery.</p>
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
                        <h5 class="text-neo-navy mb-2">Ready to Start Your Project?</h5>
                        <p class="mb-0">Contact our team to discuss your general contracting needs and project requirements.</p>
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
