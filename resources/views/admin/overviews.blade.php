@extends('admin.partials.index')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Overview</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="row w-100  total-data align-items-start">
                    <div class="col-lg-4">
                        <div class="px-4  pb-5">
                            <div class="">
                                <h1>{{ $newsData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <h6 class="m-0">News</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <div class="">
                                <h1>{{ $articleData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">

                                <h6 class="m-0">Articles</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="px-4  pb-5">
                            <div class="">
                                <h1>{{ $artData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">

                                <h6 class="m-0">Arts</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <div class="">
                                <h1>{{ $scheduleData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">

                                <h6 class="m-0">Schedules</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="px-4 pb-5">
                            <div class="">
                                <h1>{{ $reviewData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">

                                <h6 class="m-0">Reviews</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
