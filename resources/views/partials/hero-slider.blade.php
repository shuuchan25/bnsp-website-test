<div class="swiper-container hero-slider mt-4 position-relative">
    <div class="swiper-wrapper hero-wrapper">
        @if ($heroimages->count() > 0)
            @foreach ($heroimages as $heroimage)
                <div class="swiper-slide hero-slide w-100">
                    <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                </div>
            @endforeach
        @else
            <div class="swiper-slide hero-slide w-100">
                <img class="img-fluid" src="../assets/images/bike.jpeg" alt="">
            </div>
        @endif
    </div>
    <div class="swiper-pagination"></div>
</div>
