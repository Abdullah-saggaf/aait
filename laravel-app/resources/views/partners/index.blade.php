@extends('layouts.app')

@section('title', 'Our Partners')
@section('description', 'We proudly serve leading organizations across Saudi Arabia including Saudi Aramco, SABIC, and other major industrial companies.')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="mb-3">Our Trusted Partners</h1>
        <p class="lead mb-0">We proudly serve leading organizations across Saudi Arabia, providing calibration and inspection services to small, medium, and large scale industries.</p>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        
        <div class="row g-4 justify-content-center">
            @foreach($partners as $partner)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card neo-card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center p-4">
                        <div class="mb-3" style="height: 80px; width: 100%; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ asset('images/partners/' . $partner['logo']) }}" 
                                 alt="{{ $partner['name'] }} Logo" 
                                 class="img-fluid" 
                                 style="max-height: 80px; max-width: 100%; object-fit: contain;" 
                                 loading="lazy"
                                 width="150" height="80">
                        </div>
                        <h6 class="text-neo-navy text-center mb-0 mt-auto">{{ $partner['name'] }}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card neo-card bg-neo-navy text-neo-light">
                    <div class="card-body p-4">
                        <h4 class="text-neo-lime mb-3">Become a Partner</h4>
                        <p>We are continuously expanding our network of partners. If your organization requires reliable calibration and inspection services, we would be pleased to discuss how we can support your operations.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-neo-navy text-center mb-4">Industries We Serve</h3>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex align-items-center p-3 border rounded">
                            <i class="bi bi-droplet text-neo-lime me-3" style="font-size: 2rem;"></i>
                            <strong class="text-neo-navy">Oil & Gas</strong>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex align-items-center p-3 border rounded">
                            <i class="bi bi-bezier2 text-neo-lime me-3" style="font-size: 2rem;"></i>
                            <strong class="text-neo-navy">Petrochemical</strong>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex align-items-center p-3 border rounded">
                            <i class="bi bi-gear-wide-connected text-neo-lime me-3" style="font-size: 2rem;"></i>
                            <strong class="text-neo-navy">Manufacturing</strong>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex align-items-center p-3 border rounded">
                            <i class="bi bi-lightning text-neo-lime me-3" style="font-size: 2rem;"></i>
                            <strong class="text-neo-navy">Power Generation</strong>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex align-items-center p-3 border rounded">
                            <i class="bi bi-minecart text-neo-lime me-3" style="font-size: 2rem;"></i>
                            <strong class="text-neo-navy">Mining</strong>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex align-items-center p-3 border rounded">
                            <i class="bi bi-droplet-half text-neo-lime me-3" style="font-size: 2rem;"></i>
                            <strong class="text-neo-navy">Water Treatment</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
