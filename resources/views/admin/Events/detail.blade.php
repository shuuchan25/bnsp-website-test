@extends('admin.partials.index')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Penginapan & Kamar</h3>
                </div>
                <div class="d-flex gap-3 align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/reviews'">Back</button>
                    <button type="button" class="second-button" onclick="location.href='/admin/reviews/{{ $review->slug }}/edit'">Edit</button>
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
                            <h5>Nama Penginapan</h5>
                            <p>{{ $review->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>{{ optional($review->category)->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Author</h5>
                            <p>{{ $review->author }}</p>
                        </div>
                    </div>
                    <div class="col ps-4 ">
                        <div class="pb-3">
                            <h5>Genre</h5>
                            <p>{{ $review->genre }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Alias</h5>
                            <p>{{ $review->kanji }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 w-100 border-bottom">
                    <h5 class="mb-0">
                        Synopsis
                    </h5>
                    <div class="">
                        <p>
                            {!! $review->synopsis !!}
                        </p>
                    </div>
                </div>
                <div class="pt-4 w-100 border-bottom">
                    <h5 class="mb-0">
                        Review
                    </h5>
                    <div class="">
                        <p>
                            {!! $review->review !!}
                        </p>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="w-100">

                        <div class="">
                            <h5>
                                Gambar
                            </h5>
                            <div class="image-list pt-4">
                                <ul class="d:flex">
                                    {{-- Hero Image --}}
                                    <li class="pe-4 me-2 border-end">
                                        <div class="image-card">
                                            <img src="{{ Storage::url($review->image) }}" alt="">
                                                alt="">
                                        </div>
                                    </li>
                                    {{-- Gallery Image --}}
                                    @foreach ($review->images as $image)
                                        <li>
                                            <div class="image-card">
                                                <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
