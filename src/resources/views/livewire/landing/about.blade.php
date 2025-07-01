<section id="about" class="bg-base-200 py-20 px-4">
    <div class="container mx-auto">
            @if ($about)
                @if ($about->logo)
                    <div class="flex justify-center mb-6">
                        <img src="{{ $about->logo_url }}" alt="Logo" class="h-20">
                    </div>
                @endif
                
                <h2 class="text-4xl font-bold text-primary mb-4">{{ $about->title }}</h2>
            <p class="text-lg text-base-content/80 max-w-3xl mx-auto">
                {{ $about->description }}
            </p>
        @else
            <p>Data belum tersedia.</p>
        @endif
    </div>
</section>
