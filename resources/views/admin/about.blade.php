@extends('admin.partials.index')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">About</h3>
                </div>
            </div>

            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                @error('error')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror

                <div class="modal-body add-form">
                    <form action="/admin/about" method="POST" class="" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Slogan</label>
                                <div class="w-100">
                                    <input type="text" name="slogan" class="" placeholder=""
                                        value="{{ $abouts['slogan'] }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Image</label>
                                <div class="w-100">
                                    <input type="file" name="image" id="image" accept="image/*" class="file-input"
                                        onchange="previewImage()" @if (!$abouts->image) required @endif>
                                </div>
                            </div>
                        </div>
                        <div id="image-preview" class="w-100 pt-2">
                            <img src="{{ $abouts->image_url }}" alt="" class="image-card">
                        </div>
                        <div class="w-100 pt-3">
                            <label for="">About</label>
                            <input type="hidden" name="desc" id="desc" value="{{ $abouts['desc'] }}">
                            <trix-editor input="desc"></trix-editor>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="submit" class="btn save-btn mb-0 me-0">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <script>
            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            })

            function previewImage() {
                var input = document.getElementById('image');
                var preview = document.getElementById('image-preview');

                preview.innerHTML = '';

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (var i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            var img = document.createElement('img');
                            img.src = event.target.result;
                            img.classList.add('image-card');
                            preview.appendChild(img);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
        </script>

    </section>
@endsection

