@extends('layouts.app')

@section('title', 'Calibration Services')
@section('description', 'Comprehensive calibration services for mechanical, electrical, thermal, and dimensional instruments with full traceability to international standards.')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title mb-5">Calibration Services</h1>
        
        <div class="row mb-5">
            <div class="col-lg-8">
                <p class="lead">Professional calibration services for Mechanical, Electro-Technical, and Thermal measuring & source instruments, aligned with ISO/IEC-17025:2005 standards.</p>
                
                <p>Our ARAMCO-approved team provides accurate, reliable calibration services with full traceability to NIST, NPL (UK), PTB, and other national laboratories. All calibrations come with comprehensive certificates and documentation.</p>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm bg-neo-navy text-neo-light">
                    <div class="card-body">
                        <h5 class="text-neo-lime mb-3">Need Calibration?</h5>
                        <p>Contact us for a quote or to schedule your calibration service.</p>
                        <a href="{{ route('contact.index') }}" class="btn btn-primary w-100">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        
        <h2 class="text-neo-navy mb-4">Calibration Scope</h2>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-speedometer text-neo-lime me-2"></i>Pressure Calibration</h5>
                        <p>Calibration of pressure gauges, transducers, transmitters, and pressure switches across various ranges and accuracies.</p>
                        <ul class="small">
                            <li>Pressure gauges (analog & digital)</li>
                            <li>Pressure transmitters</li>
                            <li>Pressure switches</li>
                            <li>Vacuum gauges</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-thermometer-half text-neo-lime me-2"></i>Temperature & Humidity</h5>
                        <p>Calibration of temperature and humidity measuring instruments for various industrial applications.</p>
                        <ul class="small">
                            <li>Thermocouples & RTDs</li>
                            <li>Temperature transmitters</li>
                            <li>Infrared thermometers</li>
                            <li>Humidity sensors & transmitters</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-lightning text-neo-lime me-2"></i>Electrical Calibration</h5>
                        <p>Calibration of electrical measuring instruments for voltage, current, resistance, and power measurements.</p>
                        <ul class="small">
                            <li>Multimeters</li>
                            <li>Clamp meters</li>
                            <li>Power analyzers</li>
                            <li>Insulation testers</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-cpu text-neo-lime me-2"></i>Electronics Calibration</h5>
                        <p>Calibration of electronic test and measurement equipment.</p>
                        <ul class="small">
                            <li>Oscilloscopes</li>
                            <li>Signal generators</li>
                            <li>Frequency counters</li>
                            <li>Data acquisition systems</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-arrow-repeat text-neo-lime me-2"></i>Torque Calibration</h5>
                        <p>Calibration of torque measuring and application tools.</p>
                        <ul class="small">
                            <li>Torque wrenches</li>
                            <li>Torque screwdrivers</li>
                            <li>Torque transducers</li>
                            <li>Torque analyzers</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-rulers text-neo-lime me-2"></i>Dimensional Calibration</h5>
                        <p>Calibration of dimensional measuring instruments for length, thickness, and geometric measurements.</p>
                        <ul class="small">
                            <li>Micrometers</li>
                            <li>Calipers</li>
                            <li>Height gauges</li>
                            <li>Dial indicators</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-box text-neo-lime me-2"></i>Mass Calibration</h5>
                        <p>Calibration of weighing instruments and mass standards.</p>
                        <ul class="small">
                            <li>Analytical balances</li>
                            <li>Industrial scales</li>
                            <li>Platform scales</li>
                            <li>Weight sets</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-sliders text-neo-lime me-2"></i>Control Valves Calibration</h5>
                        <p>Calibration and testing of control valves and actuators.</p>
                        <ul class="small">
                            <li>Control valves</li>
                            <li>Pneumatic actuators</li>
                            <li>Valve positioners</li>
                            <li>Flow control devices</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-broadcast text-neo-lime me-2"></i>Acoustical Calibration</h5>
                        <p>Calibration of sound and noise measurement instruments.</p>
                        <ul class="small">
                            <li>Sound level meters</li>
                            <li>Noise dosimeters</li>
                            <li>Calibrators</li>
                            <li>Acoustic analyzers</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="text-neo-navy"><i class="bi bi-tools text-neo-lime me-2"></i>Onsite Services</h5>
                        <p>Onsite calibration and commissioning services for equipment that cannot be moved.</p>
                        <ul class="small">
                            <li>Onsite calibration</li>
                            <li>Equipment commissioning</li>
                            <li>Field testing</li>
                            <li>Installation support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card border-0 shadow-sm mt-5 bg-neo-light">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5 class="text-neo-navy mb-2">Ready to Calibrate Your Equipment?</h5>
                        <p class="mb-0">Contact our team for professional calibration services with flexible turnaround times.</p>
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
