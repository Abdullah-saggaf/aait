<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $siteName = 'AAIT';
        $defaultTitle = 'AAIT | Professional Technical Services in Khobar, Saudi Arabia';
        $defaultDescription = 'AAIT provides professional technical services and reliable business solutions for clients in Khobar, Saudi Arabia, with a focus on quality, trust, and long-term support.';
        $siteUrl = config('app.url') ?: 'https://advancedinspection.com.sa';

        if (str_contains($siteUrl, 'localhost') || str_contains($siteUrl, '127.0.0.1')) {
            $siteUrl = 'https://advancedinspection.com.sa';
        }

        $assetBaseUrl = rtrim($siteUrl, '/');
        $currentPath = trim(request()->path(), '/');
        $canonicalUrl = $currentPath === '' ? $siteUrl : $siteUrl . '/' . $currentPath;

        $pageTitle = trim($__env->yieldContent('title', $defaultTitle));
        $pageDescription = trim($__env->yieldContent('description', $defaultDescription));
        $pageKeywords = trim($__env->yieldContent('keywords', 'AAIT, AAIT Khobar, technical services Khobar, professional services Khobar Saudi Arabia, business solutions Khobar, Saudi Arabia technical solutions'));
        $pageOgImage = trim($__env->yieldContent('og_image', $assetBaseUrl . '/images/seo/aait-social-preview.png'));
        $pageOgTitle = trim($__env->yieldContent('og_title', $pageTitle));
        $pageOgDescription = trim($__env->yieldContent('og_description', $pageDescription));
        $pageOgUrl = trim($__env->yieldContent('og_url', $canonicalUrl));
        $pageOgType = trim($__env->yieldContent('og_type', 'website'));

        $schema = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Organization',
                    '@id' => $canonicalUrl . '#organization',
                    'name' => $siteName,
                    'url' => $canonicalUrl,
                    'logo' => $assetBaseUrl . '/images/logo5.svg',
                ],
                [
                    '@type' => 'LocalBusiness',
                    '@id' => $canonicalUrl . '#localbusiness',
                    'name' => $siteName,
                    'url' => $canonicalUrl,
                    'image' => $pageOgImage,
                    'logo' => $assetBaseUrl . '/images/logo5.svg',
                    'telephone' => '+966 50 017 6475',
                    'email' => 'info@advancedinspection.com.sa',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'addressLocality' => 'Khobar',
                        'addressRegion' => 'Eastern Province',
                        'addressCountry' => 'SA',
                    ],
                    'areaServed' => [
                        'Khobar, Saudi Arabia',
                        'Saudi Arabia',
                    ],
                ],
            ],
        ];
    @endphp
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="keywords" content="{{ $pageKeywords }}">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <meta property="og:title" content="{{ $pageOgTitle }}">
    <meta property="og:description" content="{{ $pageOgDescription }}">
    <meta property="og:image" content="{{ $pageOgImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ $pageOgUrl }}">
    <meta property="og:type" content="{{ $pageOgType }}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageOgTitle }}">
    <meta name="twitter:description" content="{{ $pageOgDescription }}">
    <meta name="twitter:image" content="{{ $pageOgImage }}">

    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

    <!-- Favicon and PWA -->
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="alternate icon" href="{{ asset('favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('favicon-192x192.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="theme-color" content="#151741">
    <meta name="msapplication-TileColor" content="#151741">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    @vite(['resources/css/theme.css'])
</head>
<body class="preloader-active">
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="preloader__content">
            <img src="{{ asset('images/logo4.svg') }}" alt="AAIT Logo" class="preloader__logo">
        </div>
    </div>

    @include('partials.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/966500176475?text=Hello%2C%20I%27d%20like%20to%20inquire%20about%20your%20testing%20services." 
       target="_blank" 
       rel="noopener noreferrer"
       class="whatsapp-float"
       aria-label="Chat with us on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
    </a>
    
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Site JavaScript -->
    <script src="{{ asset('js/site.js') }}"></script>
    
    @yield('scripts')
</body>
</html>
