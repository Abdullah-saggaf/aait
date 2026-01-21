@extends('layouts.app')

@section('title', 'Contact Us - AAIT Materials Testing Laboratory')
@section('description', 'Contact AAIT for comprehensive materials testing services in Saudi Arabia. ISO/IEC 17025 accredited laboratory in Al Khobar.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Contact Us</h1>
        <p class="lead mb-0">Get in touch with our materials testing laboratory</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-5 mb-5">
            <!-- Left Column -->
            <div class="col-md-6 reveal">
                <div class="mb-4">
                    <h6 class="text-neo-navy mb-3">
                        <i class="bi bi-geo-alt text-neo-navy me-2"></i>
                        <strong>Address:</strong> Al Khobar, Eastern Province, Kingdom of Saudi Arabia 
                        <a href="https://maps.google.com/?q=AAIT+Materials+Testing+Laboratory+Al+Khobar" target="_blank" class="text-neo-lime ms-2">( Google Map )</a>
                    </h6>
                </div>
                
                <div class="mb-4">
                    <h6 class="text-neo-navy">
                        <i class="bi bi-linkedin text-neo-navy me-2"></i>
                        <strong>Follow us on LinkedIn</strong>
                    </h6>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-md-6 reveal reveal--delay-1">
                <div class="mb-3">
                    <p class="text-neo-navy mb-2">
                        <i class="bi bi-telephone text-neo-navy me-2"></i>
                        +966 50 017 6475
                    </p>
                </div>
                
                <div class="mb-3">
                    <p class="text-neo-navy mb-2">
                        <i class="bi bi-phone text-neo-navy me-2"></i>
                        +966 13 802 4433
                    </p>
                </div>
                
                <div class="mb-3">
                    <p class="text-neo-navy mb-2">
                        <i class="bi bi-envelope text-neo-navy me-2"></i>
                        info@aait-lab.com
                    </p>
                </div>
                
                <div class="mb-3">
                    <p class="text-neo-navy mb-2">
                        <i class="bi bi-envelope text-neo-navy me-2"></i>
                        sales@aait-lab.com
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Google Map -->
        <div class="row">
            <div class="col-12 reveal reveal--delay-2">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.8!2d50.208!3d26.284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDE3JzAyLjQiTiA1MMKwMTInMjguOCJF!5e0!3m2!1sen!2ssa!4v1234567890" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
