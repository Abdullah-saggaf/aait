<section class="py-5 text-center text-white" style="background-color: #1e2050;">
    <div class="container">
        <h2 class="mb-3 text-white">{{ $title ?? 'Ready to Start Your Project?' }}</h2>
        <p class="mb-4 lead text-white">{{ $description ?? "Let's discuss how AAIT can support your calibration and inspection requirements." }}</p>
        <a href="{{ $buttonUrl ?? route('contact.index') }}" class="btn btn-primary btn-lg">{{ $buttonText ?? 'Contact Us' }}</a>
    </div>
</section>
