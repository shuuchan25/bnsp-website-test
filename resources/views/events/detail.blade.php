@extends('partials.index')
@section('content')
    <section class="page-section">
        @include('partials.header')
        <div class="page-content container mt-5 py-5">
            <div class="article-detail-page">
                <div class="d-flex align-items-center gap-3 pb-3">
                    <button class="back-button" onclick="location.href='/articles/index'">
                        <svg width="40px" height="40px" viewBox="0 0 24 24" id="SVGRoot" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                            xmlns:svg="http://www.w3.org/2000/svg">

                            <defs id="defs2" />

                            <g id="layer1">

                                <path
                                    d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.430123 16.430123 20 12 20 C 7.5698774 20 4 16.430123 4 12 C 4 7.5698774 7.5698774 4 12 4 z M 11.029297 8 A 1 1 0 0 0 10.292969 8.2929688 L 7.3125 11.273438 L 7.2929688 11.292969 A 1.0001 1.0001 0 0 0 7.2832031 11.302734 A 1 1 0 0 0 7.2363281 11.355469 A 1 1 0 0 0 7.1855469 11.421875 A 1 1 0 0 0 7.1464844 11.482422 A 1.0001 1.0001 0 0 0 7.1289062 11.509766 A 1 1 0 0 0 7.0996094 11.566406 A 1 1 0 0 0 7.0683594 11.638672 A 1.0001 1.0001 0 0 0 7.0644531 11.650391 A 1 1 0 0 0 7.0410156 11.714844 A 1.0001 1.0001 0 0 0 7.0332031 11.75 A 1 1 0 0 0 7.0234375 11.791016 A 1.0001 1.0001 0 0 0 7.015625 11.828125 A 1 1 0 0 0 7.0078125 11.871094 A 1.0001 1.0001 0 0 0 7.0019531 11.943359 A 1.0001 1.0001 0 0 0 7 11.988281 A 1 1 0 0 0 7 12 A 1 1 0 0 0 7.0019531 12.029297 A 1.0001 1.0001 0 0 0 7.0039062 12.066406 A 1 1 0 0 0 7.0078125 12.117188 A 1.0001 1.0001 0 0 0 7.0117188 12.146484 A 1 1 0 0 0 7.0253906 12.222656 A 1 1 0 0 0 7.0410156 12.28125 A 1.0001 1.0001 0 0 0 7.0546875 12.324219 A 1 1 0 0 0 7.0585938 12.337891 A 1.0001 1.0001 0 0 0 7.0878906 12.408203 A 1.0001 1.0001 0 0 0 7.1210938 12.474609 A 1 1 0 0 0 7.1347656 12.501953 A 1.0001 1.0001 0 0 0 7.1640625 12.546875 A 1 1 0 0 0 7.1777344 12.568359 A 1.0001 1.0001 0 0 0 7.2011719 12.601562 A 1 1 0 0 0 7.21875 12.623047 A 1.0001 1.0001 0 0 0 7.265625 12.677734 A 1 1 0 0 0 7.2851562 12.699219 A 1.0001 1.0001 0 0 0 7.2929688 12.707031 A 1 1 0 0 0 7.3339844 12.746094 L 10.292969 15.707031 A 1 1 0 0 0 11.707031 15.707031 A 1 1 0 0 0 11.707031 14.292969 L 10.414062 13 L 16 13 A 1 1 0 0 0 17 12 A 1 1 0 0 0 16 11 L 10.414062 11 L 11.707031 9.7070312 A 1 1 0 0 0 11.707031 8.2929688 A 1 1 0 0 0 11.029297 8 z "
                                    id="path2488"
                                    style="color:currentColor;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:currentColor;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:currentColor;solid-opacity:1;vector-effect:none;fill:currentColor;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:currentColor;stop-opacity:1;opacity:1" />

                            </g>

                        </svg>
                    </button>
                    <h1>Article</h1>
                    <div class="w-100" style="border:1.5px solid #227C9D; border-radius: 50px;"></div>
                </div>
                @if ($article && $article->image)
                    <div class="article-detail-image">
                        <img src="{{ Storage::url($article->image) }}" alt="">
                    </div>
                @else
                    <p>Gambar tidak ditemukan.</p>
                @endif
                <div class="article-detail-info pt-md-3 pt-2">
                    <p class="date">{{ $article->published_at }}</p>
                    <h1>{{ $article->title }}</h1>
                    <p>By {{ $article->author }}</p>
                </div>
                <div class="article-content pb-3">
                    {{-- {!! $article->content !!} --}}
                     {!! html_entity_decode($article->content) !!}
                    {{-- {{ $article->content }} --}}
                </div>


                <div class="comment-wrapper d-md-flex w-100 justify-content-between gap-5 py-3 border-top mt-3">
                    <div class="modal-body form-wrapper w-100">
                        <h5>Write Comment</h5>
                        <form action="/article-comments/{{ $article->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100">
                                <div class="w-100">
                                    {{-- <input type="hidden" name="article_id" value="{{ $article->id }}"> --}}
                                    <label for="name">Name*</label>
                                    <div class="w-100">
                                        <input type="text" name="name" id="name"
                                            class="@error('name') is-invalid @enderror" placeholder=""
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100 pt-3">
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="email">Email</label>
                                <div class="">
                                    <input type="text" name="email" id="email"
                                        class="@error('email') is-invalid @enderror" placeholder="Author"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div> --}}
                            <div class="w-100 pt-3">
                                <label for="comment">Comment*</label>
                                {{-- <input type="hidden" name="comment" id="comment" value="{{ old('comment') }}">
                                <trix-editor input="comment"></trix-editor> --}}
                                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                            </div>
                            <div class="modal-footer w-100 mt-3">
                                {{-- <button type="button" class="btn cancel-btn mb-0"
                            onclick="location.href='/admin/articles'">Cancel</button> --}}
                                <button type="submit" class="btn save-btn mb-0 me-0">Post</button>
                            </div>
                        </form>
                    </div>

                    <div class="w-100">
                        <h5>Comments</h5>
                        <ul class="pt-md-4">
                            @if ($comments->count() > 0)
                            @foreach ($comments as $comment)
                                <li>
                                    <h6>{{ $comment->name }}</h6>
                                    {!! $comment->comment !!}
                                </li>
                            @endforeach
                            @else
                            <div class="pt-5">
                                <p>Nothing comment found.</p>
                            </div>
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')
    </section>
@endsection
