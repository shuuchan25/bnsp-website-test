@extends('admin.partials.index')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Edit Image</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/galleries/{{ $gallery->slug }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="name">Name</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror" placeholder="Name"
                                        value="{{ old('name', $gallery->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="slug">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') is-invalid @enderror" placeholder="Slug"
                                        value="{{ old('slug', $gallery->slug) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Image</label>
                                <div class="w-100">
                                    <input type="file" name="image" id="image" accept="image/*"
                                        class="file-input @error('image') is-invalid @enderror" onchange="previewImage()"
                                        value="{{ old('image', $gallery->image) }}">
                                </div>
                                <div id="image-preview" class="w-100 pt-2">
                                    @if ($gallery->image)
                                        <div class="image-card">
                                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gambar">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- <div class="w-100 pt-3">
                            <label for="desc">Description</label>
                            <input type="hidden" name="desc" id="desc" value="{{ old('desc', $gallery->desc) }}">
                            <trix-editor input="desc"></trix-editor>
                        </div> --}}
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/galleries'">Cancel</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <script>
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
