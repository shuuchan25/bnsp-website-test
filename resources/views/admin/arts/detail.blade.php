@extends('admin.partials.index')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Art Detail</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" onclick="location.href='/admin/arts'">Back</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="w-100">
                    <img src="{{ Storage::url($art->image) }}" alt="" style="width: 100%; border-radius: 8px;">
                </div>
                <div class="">
                    <div class="d-flex align-items-center gap-2">
                        <div class="category-tag" style="background: {{ optional($art->category)->color }}">
                            {{ optional($art->category)->name }}
                        </div>
                        <p class="mb-1">{{ $art->work }}</p>
                    </div>
                    <h1 class="mb-1">{{ $art->name }}</h1>
                    <p class="">By {{ $art->source }}</p>
                </div>
                <div class="w-100">
                        {!! $art->desc !!}
                </div>
            </div>

        </div>
    </section>
@endsection
