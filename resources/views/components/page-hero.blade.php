<div class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3">{{ $title }}</h1>
                @if(isset($lead))
                    <p class="lead">{{ $lead }}</p>
                @endif
                @if(isset($breadcrumb) && $breadcrumb)
                    <nav aria-label="breadcrumb" class="mt-4">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-neo-lime">Home</a></li>
                            @foreach($breadcrumbItems ?? [] as $item)
                                @if($loop->last)
                                    <li class="breadcrumb-item active text-neo-light" aria-current="page">{{ $item['label'] }}</li>
                                @else
                                    <li class="breadcrumb-item"><a href="{{ $item['url'] }}" class="text-neo-lime">{{ $item['label'] }}</a></li>
                                @endif
                            @endforeach
                        </ol>
                    </nav>
                @endif
            </div>
        </div>
    </div>
</div>
