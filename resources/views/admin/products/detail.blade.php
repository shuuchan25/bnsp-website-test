@extends('admin.partials.index')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-md-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Product Detail</h3>
                </div>
                <div class="d-flex gap-3 align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/products'">Back</button>
                    <button type="button" class="second-button"
                        onclick="location.href='/admin/products/{{ $product->slug }}/edit'">Edit</button>
                </div>
            </div>
            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row-cols-2 w-100 d-flex align-items-start justify-content-between border-bottom">
                    <div class="col border-end">
                        <div class="pb-3">
                            <h5>Product Name</h5>
                            <p>{{ $product->name }}</p>
                        </div>
                    </div>
                    <div class="col ps-4 ">
                        <div class="pb-3">
                            <h5>Price</h5>
                            <p>Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 w-100 border-bottom">
                    <h5 class="mb-0">
                        Description
                    </h5>
                    <div class="">
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="w-100">

                        <div class="">
                            <h5>
                                Image
                            </h5>
                            <div class="image-list pt-4">
                                <ul class="d:flex">
                                    {{-- Hero Image --}}
                                    <li class="">
                                        <div class="image-card">
                                            <img src="{{ Storage::url($product->image) }}" alt="">
                                        </div>
                                    </li>
                                    {{-- Gallery Image --}}
                                    {{-- @foreach ($product->images as $image)
                                        <li>
                                            <div class="image-card">
                                                <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                            </div>
                                        </li>
                                    @endforeach --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
