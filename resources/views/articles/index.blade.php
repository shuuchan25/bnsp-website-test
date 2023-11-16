@extends('partials.index')
@section('content')
    <section class="page-section">
        @include('partials.header')
        <div class="page-content container mt-5" style="padding-top: 80px">
            <div class="article-page">
                <div class="d-flex align-items-center gap-4 mb-4" style="color: #227C9D">
                    <div class="w-100" style="border:1.5px solid #227C9D; border-radius: 50px;"></div>
                    <i class=""><svg height="28px" width="28px" version="1.1" id="_x32_"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: currentColor;
                                }
                            </style>
                            <g>
                                <polygon class="st0"
                                    points="141.788,352.225 255.996,352.225 370.212,352.225 370.212,321.898 255.996,321.898 141.788,321.898
                           " />
                                <path class="st0"
                                    d="M274.607,361.714h-37.222c0,18.466-8.673,73.956-47.726,92.186c9.108,13.012,27.337,19.526,41.655,16.918
                           c0,0,2.8,30.632,24.682,41.182c21.884-10.549,24.683-41.182,24.683-41.182c14.317,2.609,32.547-3.905,41.654-16.918
                           C283.28,435.671,274.607,380.18,274.607,361.714z" />
                                <path class="st0"
                                    d="M177.6,311.784h36.582c0,0,0.267-133.627-88.09-149.485c-90.86-16.308-136.686,97.633-78.106,144.496
                           C54.583,230.68,174.26,239.109,177.6,311.784z" />
                                <path class="st0"
                                    d="M178.95,361.478c-3.127,22.128-23.958,33.844-42.18,33.844c-19.526,0-33.843-19.534-39.053-28.642
                           c-22.136,32.547-12.228,65.734,22.127,76.81c40.358,13.012,92.423-28.634,92.423-82.012H178.95z" />
                                <path class="st0"
                                    d="M385.908,162.299c-88.358,15.858-88.09,149.485-88.09,149.485H334.4c3.34-72.676,123.017-81.104,129.615-4.989
                           C522.594,259.932,476.768,145.991,385.908,162.299z" />
                                <path class="st0"
                                    d="M375.23,395.321c-18.222,0-39.053-11.716-42.18-33.844h-33.317c0,53.378,52.066,95.024,92.423,82.012
                           c34.355-11.076,44.262-44.263,22.127-76.81C409.073,375.787,394.756,395.321,375.23,395.321z" />
                                <path class="st0"
                                    d="M275.79,311.784c0-92.202,48.053-140.866,48.053-202.855c0-55.102-39.282-94.009-67.839-108.929
                           c-28.558,14.92-67.84,53.828-67.84,108.929c0,61.989,48.054,110.653,48.054,202.855
                           C236.218,311.784,275.782,311.784,275.79,311.784z" />
                            </g>
                        </svg></i>
                    <h1>Article</h1>
                    <i class=""><svg height="28px" width="28px" version="1.1" id="_x32_"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: currentColor;
                                }
                            </style>
                            <g>
                                <polygon class="st0"
                                    points="141.788,352.225 255.996,352.225 370.212,352.225 370.212,321.898 255.996,321.898 141.788,321.898
                           " />
                                <path class="st0"
                                    d="M274.607,361.714h-37.222c0,18.466-8.673,73.956-47.726,92.186c9.108,13.012,27.337,19.526,41.655,16.918
                           c0,0,2.8,30.632,24.682,41.182c21.884-10.549,24.683-41.182,24.683-41.182c14.317,2.609,32.547-3.905,41.654-16.918
                           C283.28,435.671,274.607,380.18,274.607,361.714z" />
                                <path class="st0"
                                    d="M177.6,311.784h36.582c0,0,0.267-133.627-88.09-149.485c-90.86-16.308-136.686,97.633-78.106,144.496
                           C54.583,230.68,174.26,239.109,177.6,311.784z" />
                                <path class="st0"
                                    d="M178.95,361.478c-3.127,22.128-23.958,33.844-42.18,33.844c-19.526,0-33.843-19.534-39.053-28.642
                           c-22.136,32.547-12.228,65.734,22.127,76.81c40.358,13.012,92.423-28.634,92.423-82.012H178.95z" />
                                <path class="st0"
                                    d="M385.908,162.299c-88.358,15.858-88.09,149.485-88.09,149.485H334.4c3.34-72.676,123.017-81.104,129.615-4.989
                           C522.594,259.932,476.768,145.991,385.908,162.299z" />
                                <path class="st0"
                                    d="M375.23,395.321c-18.222,0-39.053-11.716-42.18-33.844h-33.317c0,53.378,52.066,95.024,92.423,82.012
                           c34.355-11.076,44.262-44.263,22.127-76.81C409.073,375.787,394.756,395.321,375.23,395.321z" />
                                <path class="st0"
                                    d="M275.79,311.784c0-92.202,48.053-140.866,48.053-202.855c0-55.102-39.282-94.009-67.839-108.929
                           c-28.558,14.92-67.84,53.828-67.84,108.929c0,61.989,48.054,110.653,48.054,202.855
                           C236.218,311.784,275.782,311.784,275.79,311.784z" />
                            </g>
                        </svg></i>
                        <div class="w-100" style="border:1.5px solid #227C9D; border-radius: 50px;"></div>
                </div>
                <form action="/articles/index" method="GET" id="search-form" class="w-100">
                    @csrf
                    <div class="item-filters gap-md-3 gap-2 pt-2">
                        <div class="search">
                            <i class="">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.2944 2.55566C17.6644 2.55566 22.0324 6.92366 22.0324 12.2937C22.0324 14.8272 21.0601 17.1379 19.4691 18.8722L22.5998 21.9964C22.8928 22.2894 22.8938 22.7634 22.6008 23.0564C22.4548 23.2044 22.2618 23.2774 22.0698 23.2774C21.8788 23.2774 21.6868 23.2044 21.5398 23.0584L18.3713 19.8987C16.7045 21.2335 14.5911 22.0327 12.2944 22.0327C6.92442 22.0327 2.55542 17.6637 2.55542 12.2937C2.55542 6.92366 6.92442 2.55566 12.2944 2.55566ZM12.2944 4.05566C7.75142 4.05566 4.05542 7.75066 4.05542 12.2937C4.05542 16.8367 7.75142 20.5327 12.2944 20.5327C16.8364 20.5327 20.5324 16.8367 20.5324 12.2937C20.5324 7.75066 16.8364 4.05566 12.2944 4.05566Z"
                                        fill="currentColor" />
                                </svg>
                            </i>
                            <input type="text" name="search" class="" id="search-input" placeholder="Search">
                        </div>
                        <div class="input-group-append d-md-block d-none">
                            <button class="search-button" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <div class="article-cards py-4">
                    @if ($articles->count() > 0)
                        @foreach ($articles as $article)
                            <div class="article-card" onclick="location.href='/articles/{{ $article->slug }}/detail'">
                                <div class="article-image">
                                    <img src="{{ Storage::url($article->image) }}" alt="">
                                </div>
                                <div class="article-info">
                                    <h6><a href="/articles/{{ $article->slug }}/detail">{{ $article->title }}</a></h6>
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
                <div class="pagination d-flex justify-content-center pt-4">
                    {{ $articles->links('admin.partials.custom_pagination') }}
                </div>
            </div>
        </div>

        @include('partials.footer')
    </section>
@endsection
