<section class="py-5 bg-neo-navy text-center">
    <div class="container">
        <h2 class="text-neo-light mb-3">{{ $title ?? 'Ready to Start Your Project?' }}</h2>
        <p class="text-neo-light mb-4 lead">{{ $description ?? "Let's discuss how NEO can support your calibration and inspection requirements." }}</p>
        <a href="{{ $buttonUrl ?? route('contact.index') }}" class="btn btn-primary btn-lg">{{ $buttonText ?? 'Contact Us' }}</a>
    </div>
</section>
