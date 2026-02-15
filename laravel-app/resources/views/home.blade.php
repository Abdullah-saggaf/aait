@extends('layouts.app')

@section('title', 'Home - AAIT Materials Testing Laboratory')
@section('description', 'Comprehensive materials testing laboratory services for concrete, soil, aggregates, asphalt, and water. ISO/IEC 17025 accredited testing across Saudi Arabia.')

@section('content')
<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(135deg, #151741 0%, #1a1f5a 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h1 class="display-3 fw-bold mb-4" style="color: white !important;">Advanced Materials Testing Laboratory Services</h1>
                <p class="lead mb-4 reveal">Comprehensive testing services for concrete, soil, aggregates, asphalt, and water. ISO/IEC 17025 accredited laboratory ensuring quality and compliance for construction projects across Saudi Arabia.</p>
                <div class="d-flex gap-3 flex-wrap reveal reveal--delay-1">
                    <a href="{{ route('services.concrete') }}" class="btn btn-primary btn-lg">Explore Services</a>
                    <a href="{{ route('contact.index') }}" class="btn btn-outline-primary btn-lg" style="border-color: var(--neo-lime); color: var(--neo-lime);">Request a Quote</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 reveal reveal--delay-2">
                <div class="p-5 rounded-4 d-flex align-items-center justify-content-center" style="background: rgba(255,255,255,0.05);">
                    <img src="{{ asset('images/logo2.svg') }}" 
                         alt="AAIT Logo" 
                         class="img-fluid" 
                         style="max-height: 350px;"
                         width="400" height="350">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KPI COUNTERS ROW -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="kpi-counter" data-target="19">0</div>
                    <div class="kpi-label mt-2">Years Experience</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="kpi-counter" data-target="500">0</div>
                    <div class="kpi-label mt-2">Projects Completed</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="kpi-counter" data-target="50">0</div>
                    <div class="kpi-label mt-2">Expert Team Members</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="kpi-counter" data-target="100">0</div>
                    <div class="kpi-label mt-2">Client Satisfaction %</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE OFFER -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5 reveal">What We Offer</h2>
        <div class="row g-4">
            <div class="col-md-4 reveal reveal--delay-1">
                <div class="card neo-card h-100">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/photos/Home/Compressive Strength Testing.jpg') }}" 
                             alt="Construction Materials Testing" 
                             class="w-100 h-100" 
                             style="object-fit: cover;" 
                             loading="lazy" 
                             width="400" height="200">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="text-neo-navy mb-3">Construction Materials Testing</h4>
                        <p class="mb-3">Comprehensive testing for concrete, soil, aggregates, and asphalt to ensure structural integrity and compliance with specifications.</p>
                        <a href="{{ route('services.concrete') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal reveal--delay-2">
                <div class="card neo-card h-100">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/photos/Home/Lab & Field Testing.avif') }}" 
                             alt="Lab and Field Testing" 
                             class="w-100 h-100" 
                             style="object-fit: cover;" 
                             loading="lazy" 
                             width="400" height="200">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="text-neo-navy mb-3">Lab & Field Testing</h4>
                        <p class="mb-3">Both laboratory and onsite field testing services with state-of-the-art equipment and experienced technicians.</p>
                        <a href="{{ route('services.soil') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal reveal--delay-3">
                <div class="card neo-card h-100">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/photos/Home/Advanced Testing Equipment.jpeg') }}" 
                             alt="Advanced Testing Equipment" 
                             class="w-100 h-100" 
                             style="object-fit: cover;" 
                             loading="lazy" 
                             width="400" height="200">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="text-neo-navy mb-3">ISO Accredited Reports</h4>
                        <p class="mb-3">Detailed test reports with full compliance to international standards including ASTM, BS, and AASHTO specifications.</p>
                        <a href="{{ route('about.index') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SOLUTIONS OVERVIEW -->
<section class="py-5" style="background: white;">
    <div class="container">
        <h2 class="section-title text-center mb-4 reveal">Testing Services Overview</h2>
        <p class="text-center text-neo-navy mb-5 reveal reveal--delay-1">Explore our comprehensive range of materials testing solutions</p>
        
        <!-- Category Pills -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
            <button class="category-pill active" data-category="concrete">Concrete Testing</button>
            <button class="category-pill" data-category="soil">Soil Testing</button>
            <button class="category-pill" data-category="aggregates">Aggregates Testing</button>
            <button class="category-pill" data-category="asphalt">Asphalt Testing</button>
            <button class="category-pill" data-category="water">Water Testing</button>
            <button class="category-pill" data-category="contracting">General Contracting</button>
        </div>
        
        <!-- Solution Cards Container -->
        <div id="solutionsContainer">
            <!-- Concrete Testing (default) -->
            <div class="solutions-group" data-category="concrete">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Compressive Strength Testing.jpg') }}" 
                                     alt="Compressive Strength Testing" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Compressive Strength Testing</h5>
                                <p class="mb-3">Testing of concrete cubes and cylinders for strength analysis.</p>
                                <ul class="mb-3">
                                    <li>Cube & cylinder testing</li>
                                    <li>7, 14, 28-day strength</li>
                                    <li>ASTM C39 compliant</li>
                                </ul>
                                <a href="{{ route('services.concrete') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Fresh Concrete Testing.jpg') }}" 
                                     alt="Fresh Concrete Testing" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Fresh Concrete Testing</h5>
                                <p class="mb-3">Field testing services for fresh concrete properties.</p>
                                <ul class="mb-3">
                                    <li>Slump & air content</li>
                                    <li>Temperature monitoring</li>
                                    <li>Workability assessment</li>
                                </ul>
                                <a href="{{ route('services.concrete') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Other categories (hidden by default) -->
            <div class="solutions-group d-none" data-category="soil">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Soil Classification.webp') }}" 
                                     alt="Soil Classification" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Soil Classification</h5>
                                <p class="mb-3">Complete soil classification and characterization services.</p>
                                <ul class="mb-3">
                                    <li>Grain size analysis</li>
                                    <li>Atterberg limits</li>
                                    <li>Soil classification</li>
                                </ul>
                                <a href="{{ route('services.soil') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Compaction & CBR Testing.jpg') }}" 
                                     alt="Compaction and CBR Testing" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Compaction & CBR Testing</h5>
                                <p class="mb-3">Standard and modified Proctor, CBR testing services.</p>
                                <ul class="mb-3">
                                    <li>Proctor compaction</li>
                                    <li>California Bearing Ratio</li>
                                    <li>Field density testing</li>
                                </ul>
                                <a href="{{ route('services.soil') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="solutions-group d-none" data-category="aggregates">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Aggregate Physical Properties.jpg') }}" 
                                     alt="Aggregate Physical Properties Testing" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Aggregate Physical Properties</h5>
                                <p class="mb-3">Testing for physical characteristics of aggregates.</p>
                                <ul class="mb-3">
                                    <li>Sieve analysis</li>
                                    <li>Specific gravity & absorption</li>
                                    <li>Moisture content</li>
                                </ul>
                                <a href="{{ route('services.aggregates') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Aggregate Strength Testing.avif') }}" 
                                     alt="Aggregate Strength Testing" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Aggregate Strength Testing</h5>
                                <p class="mb-3">Mechanical strength and durability assessment.</p>
                                <ul class="mb-3">
                                    <li>Los Angeles abrasion</li>
                                    <li>Crushing & impact value</li>
                                    <li>Soundness testing</li>
                                </ul>
                                <a href="{{ route('services.aggregates') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="solutions-group d-none" data-category="asphalt">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Asphalt Mix Design.jpg') }}" 
                                     alt="Asphalt Mix Design" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Asphalt Mix Design</h5>
                                <p class="mb-3">Marshall stability and mix design testing.</p>
                                <ul class="mb-3">
                                    <li>Marshall stability test</li>
                                    <li>Optimum binder content</li>
                                    <li>Mix design optimization</li>
                                </ul>
                                <a href="{{ route('services.asphalt') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Bitumen Testing.webp') }}" 
                                     alt="Bitumen Testing" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Bitumen Testing</h5>
                                <p class="mb-3">Comprehensive bitumen binder characterization.</p>
                                <ul class="mb-3">
                                    <li>Penetration & softening point</li>
                                    <li>Ductility & viscosity</li>
                                    <li>Flash & fire point</li>
                                </ul>
                                <a href="{{ route('services.asphalt') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="solutions-group d-none" data-category="water">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Physical Water Testing.avif') }}" 
                                     alt="Physical Water Testing" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Physical Water Testing</h5>
                                <p class="mb-3">Physical and appearance-based water quality tests.</p>
                                <ul class="mb-3">
                                    <li>pH & turbidity</li>
                                    <li>TDS & conductivity</li>
                                    <li>Color & odor</li>
                                </ul>
                                <a href="{{ route('services.water') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="overflow-hidden" style="height: 180px;">
                                <img src="{{ asset('images/photos/Home/Chemical Water Analysis.jpg') }}" 
                                     alt="Chemical Water Analysis" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     loading="lazy" 
                                     width="400" height="180">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="text-neo-navy mb-3">Chemical Water Analysis</h5>
                                <p class="mb-3">Complete chemical composition analysis.</p>
                                <ul class="mb-3">
                                    <li>Chloride & sulfate content</li>
                                    <li>Heavy metals analysis</li>
                                    <li>BOD & COD testing</li>
                                </ul>
                                <a href="{{ route('services.water') }}" class="btn btn-primary btn-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="solutions-group d-none" data-category="contracting">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="card neo-card solution-card h-100">
                            <div class="card-body p-4 text-center">
                                <i class="bi bi-building text-neo-lime" style="font-size: 4rem;"></i>
                                <h5 class="text-neo-navy mt-4 mb-3">General Contracting Services</h5>
                                <p class="mb-3">Reliable and high-quality contracting services tailored to project requirements.</p>
                                <ul class="text-start mb-4">
                                    <li>Project planning & coordination</li>
                                    <li>Construction management</li>
                                    <li>Quality execution & delivery</li>
                                </ul>
                                <a href="{{ route('services.contracting') }}" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTING SCOPE -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Testing Capabilities</h2>
        <div class="row g-3">
            @foreach(['Concrete Lab and Field Testing', 'Soil Lab and Field Testing', 'Aggregates Lab and Field Testing', 'Asphalt Lab and Field Testing', 'Water Lab Testing', 'General Contracting', 'Compressive Strength Testing', 'CBR & Compaction Testing', 'Marshall Stability Testing', 'Core Sampling & Analysis', 'Chemical Analysis'] as $scope)
            <div class="col-md-6 col-lg-4">
                <div class="card neo-card h-100">
                    <div class="card-body p-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-neo-lime me-3" style="font-size: 1.5rem;"></i>
                        <span class="fw-semibold text-neo-navy">{{ $scope }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- OUR PEOPLE -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title mb-4">Our Laboratory</h2>
                <p class="lead text-neo-navy mb-3">State-of-the-Art Testing Facilities</p>
                <p class="mb-4">Our highly qualified and experienced technical staff are trained in international testing standards including ASTM, BS, and AASHTO. We maintain a team of skilled engineers and technicians dedicated to delivering accurate and reliable materials testing services.</p>
                <p class="mb-4">Our laboratory is fully equipped with modern, highly accurate testing equipment and machines. We benefit from strategic location advantages for our customers and optimal environmental conditions for laboratory testing activities.</p>
                
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="text-center p-3 rounded" style="background: var(--neo-light);">
                            <div class="fw-bold text-neo-navy fs-4">ISO 17025</div>
                            <small class="text-neo-navy">Accredited Lab</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-3 rounded" style="background: var(--neo-light);">
                            <div class="fw-bold text-neo-navy fs-4">±0.1%</div>
                            <small class="text-neo-navy">Accuracy Level</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-3 rounded" style="background: var(--neo-light);">
                            <div class="fw-bold text-neo-navy fs-4">24/7</div>
                            <small class="text-neo-navy">Service Available</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-3 rounded" style="background: var(--neo-light);">
                            <div class="fw-bold text-neo-navy fs-4">Fast</div>
                            <small class="text-neo-navy">Turnaround Time</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="card neo-card overflow-hidden">
                    <img src="{{ asset('images/photos/Home/Advanced Testing Equipment.jpeg') }}" 
                         alt="Advanced Testing Equipment" 
                         class="w-100" 
                         style="aspect-ratio: 4/3; object-fit: cover;" 
                         loading="lazy" 
                         width="600" height="450">
                    <div class="card-body p-4 text-center">
                        <h5 class="text-neo-navy mb-0">Advanced Testing Equipment</h5>
                        <p class="text-neo-navy mt-2 mb-0">Modern Laboratory Infrastructure</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
@include('components.cta-section')
@endsection
