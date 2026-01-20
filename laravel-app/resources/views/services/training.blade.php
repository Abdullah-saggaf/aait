@extends('layouts.app')

@section('title', 'Training Services')
@section('description', 'Professional training programs for calibration, measurement techniques, and quality management.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">Training Services</h1>
        
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <p class="lead">Professional training programs designed to enhance the skills and knowledge of your technical staff in calibration, measurement, and quality management.</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-speedometer text-neo-lime" style="font-size: 2.5rem;"></i>
                        <h5 class="text-neo-navy mt-3">Calibration Fundamentals</h5>
                        <p class="small">Introduction to calibration principles, standards, and best practices for measuring instruments.</p>
                        <ul class="small">
                            <li>Measurement uncertainty</li>
                            <li>Traceability concepts</li>
                            <li>Calibration procedures</li>
                            <li>Documentation</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-thermometer text-neo-lime" style="font-size: 2.5rem;"></i>
                        <h5 class="text-neo-navy mt-3">Temperature Calibration</h5>
                        <p class="small">Specialized training in temperature measurement and calibration techniques.</p>
                        <ul class="small">
                            <li>Temperature sensors</li>
                            <li>Calibration methods</li>
                            <li>Error sources</li>
                            <li>Best practices</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-lightning text-neo-lime" style="font-size: 2.5rem;"></i>
                        <h5 class="text-neo-navy mt-3">Electrical Calibration</h5>
                        <p class="small">Training on electrical measurement and calibration of electrical instruments.</p>
                        <ul class="small">
                            <li>Electrical parameters</li>
                            <li>Meter calibration</li>
                            <li>Safety procedures</li>
                            <li>Troubleshooting</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-rulers text-neo-lime" style="font-size: 2.5rem;"></i>
                        <h5 class="text-neo-navy mt-3">Dimensional Metrology</h5>
                        <p class="small">Training in dimensional measurement and calibration techniques.</p>
                        <ul class="small">
                            <li>Measurement techniques</li>
                            <li>Tool calibration</li>
                            <li>GD&T basics</li>
                            <li>Quality control</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-file-earmark-text text-neo-lime" style="font-size: 2.5rem;"></i>
                        <h5 class="text-neo-navy mt-3">ISO/IEC 17025</h5>
                        <p class="small">Understanding and implementing ISO/IEC 17025:2005 requirements.</p>
                        <ul class="small">
                            <li>Standard requirements</li>
                            <li>Documentation</li>
                            <li>Quality system</li>
                            <li>Compliance</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-graph-up text-neo-lime" style="font-size: 2.5rem;"></i>
                        <h5 class="text-neo-navy mt-3">Measurement Uncertainty</h5>
                        <p class="small">Advanced training on uncertainty estimation and reporting.</p>
                        <ul class="small">
                            <li>Uncertainty sources</li>
                            <li>Calculation methods</li>
                            <li>GUM guidelines</li>
                            <li>Reporting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-neo-navy mb-4">Training Delivery Options</h3>
                
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-building text-neo-lime" style="font-size: 2.5rem;"></i>
                                <h5 class="text-neo-navy mt-3">On-Site Training</h5>
                                <p class="small">Customized training delivered at your facility for your team.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-house text-neo-lime" style="font-size: 2.5rem;"></i>
                                <h5 class="text-neo-navy mt-3">Public Courses</h5>
                                <p class="small">Scheduled training sessions at our facility for individuals or small groups.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-pencil-square text-neo-lime" style="font-size: 2.5rem;"></i>
                                <h5 class="text-neo-navy mt-3">Custom Programs</h5>
                                <p class="small">Tailored training programs designed for your specific requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm bg-neo-light">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="text-neo-navy mb-2">Interested in Training?</h5>
                                <p class="mb-0">Contact us to discuss your training needs and schedule.</p>
                            </div>
                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                <a href="{{ route('contact.index') }}" class="btn btn-primary">Inquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
