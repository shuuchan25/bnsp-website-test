@extends('partials.index')
@section('content')
    <section class="page-section">
        @include('partials.header')
        <div class="page-content container mt-5 pt-5">
            <div class="release-detail-page">
                <div class="d-flex align-items-center gap-3 pb-3">
                    <button class="back-button" onclick="location.href='/'">
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
                                    style="color:currentColor; font-style:normal;f ont-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:currentColor;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:currentColor;solid-opacity:1;vector-effect:none;fill:currentColor;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:currentColor;stop-opacity:1;opacity:1" />
                            </g>

                        </svg>
                    </button>
                    <h1>Product</h1>
                    <div class="w-100" style="border:1.5px solid #227C9D; border-radius: 50px"></div>
                </div>
                <div class="release-detail row pt-3 pb-5">
                    <div class="col-md-4">
                        <div class="release-detail-image">
                            <img src="{{ Storage::url($product->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 pt-md-0 pt-3">
                        <div class="release-detail-info">

                            <h4>{{ $product->name }}</h4>
                            <div class="mb-3 border"></div>

                            <div class="mb-2">
                                <h6>Price</h6>
                                <p class="mb-0">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                            @if ($product->description)
                                <div class="">
                                    <h6 class="">Description</h6>
                                    {!! $product->description !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>



            </div>
        </div>

        @include('partials.footer')
    </section>
@endsection
