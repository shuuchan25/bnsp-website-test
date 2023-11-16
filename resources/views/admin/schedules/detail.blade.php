@extends('admin.partials.index')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-md-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Schedule Detail</h3>
                </div>
                <div class="d-flex gap-3 align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/schedules'">Back</button>
                    <button type="button" class="second-button"
                        onclick="location.href='/admin/schedules/{{ $schedule->slug }}/edit'">Edit</button>
                </div>
            </div>
            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row w-100 d-md-flex align-items-start justify-content-start border-bottom pb-3">
                    <div class="col-md-5">
                        <div class="">
                            <div class="cover-card">
                                <img src="{{ Storage::url($schedule->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pb-1">
                            <h6>Title</h6>
                            <p>{{ $schedule->name }}</p>
                        </div>
                        <div class="pb-1">
                            <h6>Category</h6>
                            <p>{{ optional($schedule->category)->name }}</p>
                        </div>
                        <div class="pb-1">
                            <h6>Author</h6>
                            <p>{{ $schedule->author }}</p>
                        </div>
                        <div class="pb-1">
                            <h6>Genre</h6>
                            <p>{{ $schedule->genre }}</p>
                        </div>
                        <div class="pb-1">
                            <h6>Release Date</h6>
                            <p>{{ $schedule->date }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 w-100">
                    <h6 class="mb-0">
                        Synopsis
                    </h6>
                    <div class="">
                        <p>
                            {!! $schedule->synopsis !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
