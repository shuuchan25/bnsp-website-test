@php
    // $isMobile = $agent->isMobile() && !$agent->isTablet();
    // $isTablet = $agent->isTablet();
    // dd($isMobile, $isTablet);
    // dd($heroimages)
@endphp

<div class="swiper-container hero-slider mt-4 position-relative">
    <div class="swiper-wrapper hero-wrapper">
        {{-- @if ($heroimages->count() > 0)
            @foreach ($heroimages as $heroimage)
                @if ($heroimage->imageOrientation->name === 'portrait')
                    @if ($isMobile)
                        <div class="swiper-slide hero-slide w-100">
                            <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                        </div>
                    @endif
                @elseif ($heroimage->imageOrientation->name === 'landscape')
                    @if (!$isMobile)
                        <div class="swiper-slide hero-slide w-100">
                            <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                        </div>
                    @endif
                @endif
            @endforeach
        @else --}}
            <div class="swiper-slide hero-slide w-100">
                <img class="img-fluid" src="../assets/images/bike.jpeg" alt="">
            </div>
        {{-- @endif --}}
    </div>
    <div class="swiper-pagination"></div>
</div>
{{-- <div class="swiper-container hero-slider mt-4 position-relative">
    <div class="swiper-wrapper hero-wrapper">
        @if ($heroimages->count() > 0)
            @foreach ($heroimages as $heroimage)
                @if ($heroimage->imageOrientation->name === 'portrait')
                    @if ($isMobile)
                        <div class="swiper-slide hero-slide w-100">
                            <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                        </div>
                    @endif
                @elseif ($heroimage->imageOrientation->name === 'landscape')
                    <div class="swiper-slide hero-slide w-100">
                        <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                    </div>
                @endif
            @endforeach
        @else
            <div class="swiper-slide hero-slide w-100">
                <img class="img-fluid" src="../assets/images/koma.png" alt="">
            </div>
        @endif
    </div>
    <div class="swiper-pagination"></div>
</div> --}}

{{-- <div class="swiper-container hero-slider mt-4 position-relative">
    <div class="swiper-wrapper hero-wrapper">
        @if ($heroimages->count() > 0)
            @foreach ($heroimages as $heroimage)
                @if (($heroimage->imageOrientation->name === 'landscape') && $isTablet)
                    <div class="swiper-slide hero-slide w-100">
                        <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                    </div>
                @elseif (($heroimage->imageOrientation->name === 'portrait') && $isMobile)
                    <div class="swiper-slide hero-slide w-100">
                        <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                    </div>
                @endif
            @endforeach
        @else
            <div class="swiper-slide hero-slide w-100">
                <img class="img-fluid" src="../assets/images/koma.png" alt="">
            </div>
        @endif
    </div>
    <div class="swiper-pagination"></div>
</div>

<script>
    var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    var isMobile = screenWidth <= 425;
    var isTablet = screenWidth > 425 && screenWidth <= 991;
</script> --}}

{{-- <div class="swiper-container hero-slider mt-4 position-relative">
    <div class="swiper-wrapper hero-wrapper">
        @if ($heroimages->count() > 0)
            @foreach ($heroimages as $heroimage)
                @php
                    // Variabel JavaScript untuk menentukan tipe perangkat
                    echo "<script>
                        var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                        var $isMobile = screenWidth <= 425;
                        var $isTablet = screenWidth > 425 && screenWidth <= 991;

                        console.log('isMobile:', isMobile);
console.log('isTablet:', isTablet);
                    </script>";
                @endphp

                @if (($heroimage->imageOrientation->name === 'landscape') && isset($isTablet) && $isTablet)
                    <div class="swiper-slide hero-slide w-100">
                        <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                    </div>
                @elseif (($heroimage->imageOrientation->name === 'portrait') && isset($isMobile) && $isMobile)
                    <div class="swiper-slide hero-slide w-100">
                        <img class="img-fluid" src="{{ Storage::url($heroimage->image) }}" alt="">
                    </div>
                @endif
            @endforeach
        @else
            <div class="swiper-slide hero-slide w-100">
                <img class="img-fluid" src="../assets/images/koma.png" alt="">
            </div>
        @endif
    </div>
    <div class="swiper-pagination"></div>
</div>
 --}}


