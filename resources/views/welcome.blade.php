@extends('partials.index')
@section('content')
    <section class="page-section">
        @include('partials.header')
        @include('partials.offcanvas')
        <div class="overflow-hidden position-relative mb-5">
            <div class="overlay"></div>
            <div class="hero-text">
                <div class="">
                    <h1>Club Motor</h1>
                    <div class="d-flex justify-content-center py-4">
                        <button class="start-button d-flex align-items-center justify-content-center"
                            onclick="location.href='#vision'">
                            Start Explore
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="Arrow / Caret_Right_SM">
                                    <path id="Vector" d="M11 9L14 12L11 15" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @include('partials.hero-slider')
            <div class="" id="vision">

            </div>
        </div>

        <div class="container circles d-flex align-items-center justify-content-center w-100 gap-3">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-1"></div>
        </div>

        <div class="page-content container overflow-hidden pt-4 pb-5 mb-2" id="pageContent">
            <div class="vision-container pb-5">
                <div class="text-center mb-4">
                    <h1>Vision & Missions</h1>
                </div>

                <div class="container">
                    <div class="vision-card row ">
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-center align-items-center p-3 h-100">
                                <svg fill="#fff" width="150px" height="150px" viewBox="0 0 32 32" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>hand-holding-hand</title>
                                    <path
                                        d="M29.287 19.252c-0.486-0.206-1.052-0.326-1.646-0.326-0.65 0-1.267 0.144-1.82 0.402l0.027-0.011-5.121 2.301c-0.32-1.36-1.523-2.356-2.959-2.356-0.058 0-0.115 0.002-0.172 0.005l0.008-0h-3.711l-4.691-1.375c-0.104-0.032-0.225-0.051-0.349-0.051-0.001 0-0.002 0-0.003 0h-1.669v-0.257c0-0.69-0.56-1.25-1.25-1.25v0h-3.883c-0.69 0-1.25 0.56-1.25 1.25v0 12.208c0 0.69 0.56 1.25 1.25 1.25h3.883c0.69-0 1.25-0.56 1.25-1.25v-0.44c1.596 0.316 2.993 0.738 4.33 1.278l-0.159-0.057c1.209 0.432 2.603 0.682 4.056 0.682 1.676 0 3.274-0.332 4.732-0.934l-0.082 0.030c1.271-0.563 2.351-1.16 3.372-1.839l-0.083 0.052c0.334-0.207 0.668-0.412 1.004-0.611 1.648-0.977 2.973-1.832 4.17-2.699 0.595-0.424 1.115-0.843 1.608-1.29l-0.014 0.013c0.428-0.353 0.769-0.795 0.997-1.3l0.009-0.023c0.052-0.133 0.082-0.287 0.082-0.448 0-0.093-0.010-0.184-0.029-0.271l0.002 0.008c-0.176-1.17-0.885-2.144-1.868-2.68l-0.019-0.010zM4.681 28.541h-1.383v-9.709h1.383zM28.379 22.174c-0.398 0.356-0.831 0.702-1.283 1.024l-0.046 0.031c-1.131 0.818-2.395 1.635-3.975 2.57-0.352 0.209-0.697 0.424-1.045 0.639-0.833 0.557-1.791 1.091-2.793 1.547l-0.129 0.052c-1.096 0.451-2.369 0.712-3.703 0.712-1.137 0-2.229-0.19-3.247-0.54l0.070 0.021c-1.451-0.607-3.148-1.097-4.911-1.392l-0.137-0.019v-6.48h1.489l4.691 1.375c0.105 0.032 0.226 0.051 0.351 0.051h3.891c0.443 0 0.697 0.17 0.697 0.469s-0.254 0.469-0.697 0.469h-6.809c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h7.781c0 0 0 0 0.001 0 0.185 0 0.361-0.040 0.519-0.113l-0.008 0.003 7.803-3.504c0.228-0.105 0.494-0.167 0.774-0.167 0.183 0 0.359 0.026 0.526 0.075l-0.013-0.003c0.185 0.113 0.326 0.282 0.4 0.484l0.002 0.007c-0.066 0.064-0.137 0.129-0.201 0.189zM29.951 1.006h-3.883c-0.69 0-1.25 0.56-1.25 1.25v0.448c-1.595-0.317-2.993-0.742-4.328-1.287l0.156 0.056c-1.208-0.433-2.603-0.683-4.055-0.683-1.675 0-3.273 0.333-4.73 0.936l0.082-0.030c-1.27 0.563-2.349 1.16-3.369 1.837l0.083-0.052c-0.335 0.207-0.669 0.414-1.006 0.614-1.659 0.982-2.983 1.839-4.165 2.695-0.592 0.42-1.109 0.836-1.6 1.281l0.014-0.013c-0.433 0.355-0.779 0.8-1.009 1.308l-0.009 0.023c-0.053 0.134-0.084 0.288-0.084 0.45 0 0.094 0.010 0.185 0.030 0.273l-0.002-0.008c0.176 1.169 0.885 2.143 1.868 2.678l0.019 0.010c0.44 0.218 0.957 0.345 1.505 0.345 0.013 0 0.027-0 0.040-0l-0.002 0c0.688-0.007 1.339-0.157 1.928-0.42l-0.031 0.012 5.121-2.302c0.319 1.361 1.523 2.358 2.959 2.358 0.057 0 0.114-0.002 0.171-0.005l-0.008 0h3.711l4.691 1.374c0.105 0.032 0.225 0.051 0.35 0.051 0.001 0 0.001 0 0.002 0h1.668v0.257c0 0.69 0.56 1.25 1.25 1.25h3.883c0.69-0 1.25-0.56 1.25-1.25v-12.207c-0-0.69-0.56-1.25-1.25-1.25h-0zM23.33 11.706l-4.691-1.374c-0.105-0.032-0.225-0.051-0.35-0.051-0.001 0-0.001 0-0.002 0h-3.89c-0.442 0-0.696-0.171-0.696-0.47s0.254-0.47 0.696-0.47h6.809c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0h-7.782c-0 0-0.001 0-0.001 0-0.185 0-0.361 0.040-0.52 0.113l0.008-0.003-7.8 3.506c-0.227 0.106-0.494 0.167-0.774 0.167-0.183 0-0.36-0.026-0.527-0.075l0.013 0.003c-0.185-0.113-0.326-0.283-0.4-0.485l-0.002-0.007c0.066-0.064 0.139-0.131 0.202-0.188 0.399-0.359 0.832-0.706 1.285-1.027l0.044-0.030c1.119-0.811 2.382-1.628 3.975-2.57 0.351-0.208 0.698-0.423 1.047-0.639 0.832-0.558 1.79-1.092 2.791-1.547l0.128-0.052c1.097-0.451 2.37-0.713 3.705-0.713 1.135 0 2.227 0.19 3.243 0.539l-0.070-0.021c1.449 0.597 3.145 1.083 4.907 1.379l0.142 0.020v6.494zM28.701 13.213h-1.383v-9.707h1.383z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex justify-content-center align-items-center p-4 h-100">
                                <h5>Menjadi pusat kegiatan dan inspirasi bagi komunitas sepeda motor, mempromosikan
                                    kebebasan berkendara dan solidaritas.</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gx-3 mission pt-3">
                    <div class="col-lg-4 col-md-12">
                        <div class="mission-card">
                            <div class="py-2">
                                <svg fill="#fff" width="150px" height="150px" viewBox="0 0 24 24" id="quality-5"
                                    data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                                    <polyline id="secondary" points="10 10 11.33 11.5 14 8.5"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <polyline id="primary" points="5.79 13.57 3 17.56 6.03 18.46 7.91 21 10.79 16.89"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <polyline id="primary-2" data-name="primary"
                                        points="18.21 13.57 21 17.56 17.97 18.46 16.09 21 13.21 16.89"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <circle id="primary-3" data-name="primary" cx="12" cy="10" r="7"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </circle>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h5>Mengorganisir acara dan kegiatan yang memperkuat ikatan antaranggota.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="mission-card">
                            <div class="py-2">
                                <svg fill="#fff" width="150px" height="150px" viewBox="0 0 24 24" id="quality-5"
                                    data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                                    <polyline id="secondary" points="10 10 11.33 11.5 14 8.5"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <polyline id="primary" points="5.79 13.57 3 17.56 6.03 18.46 7.91 21 10.79 16.89"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <polyline id="primary-2" data-name="primary"
                                        points="18.21 13.57 21 17.56 17.97 18.46 16.09 21 13.21 16.89"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <circle id="primary-3" data-name="primary" cx="12" cy="10" r="7"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </circle>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h5>Menciptakan platform untuk berbagi pengalaman dan pengetahuan sepeda motor.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="mission-card">
                            <div class="pb-2">
                                <svg fill="#fff" width="150px" height="150px" viewBox="0 0 24 24" id="quality-5"
                                    data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                                    <polyline id="secondary" points="10 10 11.33 11.5 14 8.5"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <polyline id="primary" points="5.79 13.57 3 17.56 6.03 18.46 7.91 21 10.79 16.89"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <polyline id="primary-2" data-name="primary"
                                        points="18.21 13.57 21 17.56 17.97 18.46 16.09 21 13.21 16.89"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </polyline>
                                    <circle id="primary-3" data-name="primary" cx="12" cy="10" r="7"
                                        style="fill: none; stroke: white; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </circle>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h5>Menyediakan merchandise berkualitas untuk memperkuat identitas komunitas.</h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="article-container py-5">
                <div class="d-flex align-items-center justify-content-between gap-4 pb-3">
                    <h1>Articles</h1>
                    {{-- <div class="w-100 border"></div> --}}
                    <button class="primary-button" onclick="location.href='/articles/index'">
                        More
                    </button>
                </div>
                <div class="swiper-container article-slider position-relative">
                    <div class="swiper-wrapper article-wrapper">
                        @if ($articles->count() > 0)
                            @foreach ($articles as $article)
                                <div class="swiper-slide article-slide" onclick="location.href='/article/'">
                                    <div class="article-image">
                                        <img src="{{ Storage::url($article->image) }}" alt="">
                                    </div>
                                    <div class="article-info">
                                        <h6><a href="/articles/{{ $article->slug }}/detail"></a>{{ $article->title }}</h6>
                                        <p>{{ $article->published_at }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="pt-5">
                                <p>Nothing article found.</p>
                            </div>
                        @endif

                    </div>
                    <div class="swiper-pagination article-pagination"></div>
                    {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                </div>
            </div>
        </div>

        <div class="" id="about"></div>

        <div class="about-container">
            <div class="row gx-5 container">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="{{ Storage::url($about->image) }}" alt="">
                    </div>
                </div>
                <div class="about-info col-lg-7 ml-lg-5 mt-lg-0 mt-3">
                    <div class="d-flex align-items-center gap-4 pb-3">
                        <h1>About</h1>
                        <div class="w-100" style="border: 1px solid white;"></div>
                    </div>
                    <div class="text-white">
                        {!! \Illuminate\Support\Str::words($about->desc, 90) !!}
                    </div>
                    <button class="primary-button mt-4" onclick="location.href='/event/index'">
                        More
                    </button>
                </div>

            </div>
        </div>

        <div class="page-content container overflow-hidden py-5 my-5">
            <div class="event-container">
                <div class="d-flex align-items-center justify-content-between gap-4 pb-3">
                    <h1>Event</h1>
                    {{-- <div class="w-100 border"></div> --}}
                    <button class="primary-button" onclick="location.href='/event/index'">
                        More
                    </button>
                </div>
                <div class="swiper-container event-slider position-relative">
                    <div class="swiper-wrapper event-wrapper">
                        {{-- @if ($infos->count() > 0)
                            @foreach ($infos as $info) --}}
                        <div class="swiper-slide event-slide " onclick="location.href=''">
                            <div class="event-image">
                                <img src="../assets/images/bike.jpeg" alt="">
                            </div>
                            <div class="event-info">
                                {{-- <div class="category-tag mb-1"
                                            style="background: ">

                                        </div> --}}
                                <a href="">
                                    <h6>Event yang akan dilaksanakan bulan ini</h6>
                                </a>
                                <div class="event-date-tag w-100">
                                    <p>2023.12.1</p>

                                </div>
                            </div>
                        </div>
                        {{-- @endforeach
                        @else
                            <div class="pt-5">
                                <p>Nothing info found.</p>
                            </div>
                        @endif
                    {{-- </div> --}}
                        <div class="swiper-pagination event-pagination"></div>
                        {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery-container">

            <div class="container overflow-hidden">
                {{-- <div class="w-100 mb-3" style="border: 1px solid white;"></div> --}}
                <div class="d-flex align-items-center justify-content-between gap-4 ">
                    <h1>Gallery</h1>

                    <button class="primary-button" onclick="location.href='/arts/index'" style="">
                        More
                    </button>
                </div>
                <div class="swiper-container gallery-slider position-relative">
                    <div class="swiper-wrapper gallery-wrapper">
                        @if ($galleries->count() > 0)
                            @foreach ($galleries as $gallery)
                                <div class="swiper-slide gallery-slide">
                                    <h2>{{ $gallery->name }}</h2>
                                    <span>hover here</span>
                                    <div class="gallery-slide-image"
                                        style="background-image: url('{{ Storage::url($gallery->image) }}');">
                                    </div>
                                    <button class=""></button>
                                </div>
                            @endforeach
                        @else
                            <div class="pt-5">
                                <p>Nothing image found.</p>
                            </div>
                        @endif
                    </div>
                    <div class="swiper-pagination gallery-pagination"></div>
                </div>
            </div>
        </div>

        <div class="" id="product"></div>

        <div class="page-content container overflow-hidden py-5 my-5">
            <div class="product-container">
                <div class="d-flex align-items-center justify-content-between gap-4 pb-3">
                    <h1>Products</h1>
                    {{-- <div class="w-100 border"></div> --}}
                    <button class="primary-button" onclick="location.href='/products/index'">
                        More
                    </button>
                </div>
                <div class="swiper-container product-slider position-relative">
                    <div class="swiper-wrapper product-wrapper">
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="swiper-slide product-slide "
                                    onclick="location.href='/products/{{ $product->slug }}'">
                                    <div class="product-image">
                                        <img src="{{ Storage::url($product->image) }}" alt="">
                                    </div>
                                    <div class="product-info">
                                        <a href="/products/{{ $product->slug }}">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <div class="product-date-tag w-100">
                                            <p>Rp{{ number_format($product->price, 0, ',', '.') }}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="pt-5">
                                <p>Nothing info found.</p>
                            </div>
                        @endif
                    </div>
                    <div class="swiper-pagination product-pagination"></div>
                    {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                </div>
            </div>

            <div class="client-container pt-5">
                <div class="text-center mb-4 pt-5 d-flex align-items-center justify-content-center w-100 gap-3">
                    <div class="circles d-flex align-items-center justify-content-center w-100 gap-3">
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                    </div>
                    <h1>Client</h1>
                    <div class="circles d-flex align-items-center justify-content-center w-100 gap-3">
                        <div class="circle-2"></div>
                        <div class="circle-1"></div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-2 client-logo">
                        <img src="{{ asset('/assets/images/Logo UB.png') }}" alt="">
                    </div>
                    <div class="col-lg-2 client-logo">
                        <img src="{{ asset('/assets/images/Logo UB.png') }}" alt="">
                    </div>
                    <div class="col-lg-2 client-logo">
                        <img src="{{ asset('/assets/images/Logo UB.png') }}" alt="">
                    </div>
                    <div class="col-lg-2 client-logo">
                        <img src="{{ asset('/assets/images/Logo UB.png') }}" alt="">
                    </div>
                    <div class="col-lg-2 client-logo">
                        <img src="{{ asset('/assets/images/Logo UB.png') }}" alt="">
                    </div>
                    <div class="col-lg-2 client-logo">
                        <img src="{{ asset('/assets/images/Logo UB.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>



        <!-- LightWidget WIDGET -->
        {{-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
        <div class="container">
            <iframe src="//lightwidget.com/widgets/e35c2a04c94a5a019768e350caab507b.html" scrolling="no"
                allowtransparency="true" class="lightwidget-widget"
                style="width:100%;border:0;overflow:hidden;"></iframe>
        </div>
        </div> --}}


        @include('partials.footer')
        {{-- @include('partials.loader') --}}

        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                var loaderContainer = document.getElementById('loader-container');

                // Hapus animasi pemuatan setelah konten dimuat
                loaderContainer.style.display = 'none';
            });
        </script> --}}
    </section>
@endsection
