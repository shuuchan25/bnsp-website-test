@extends('admin.partials.index')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Edit Product</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/products/{{ $product->slug }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Title</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror"
                                        value="{{ old('name', $product->name) }}" required placeholder="Title">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') is-invalid @enderror"
                                        value="{{ old('slug', $product->slug) }}" required placeholder="Slug">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-start justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Price</label>
                                <div class="w-100">
                                    <input type="number" name="price" id="price"
                                        class="@error('price') is-invalid @enderror"
                                        value="{{ old('price', $product->price) }}" required placeholder="Price">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Image (Max. 1 file & 5MB)</label>
                                <div class="w-100">
                                    <input type="file" name="image" id="image"
                                        class="@error('image') is-invalid @enderror"
                                        value="{{ old('image', $product->image) }}" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div id="image-preview" class="image-list w-100 pt-2">
                                    <img src="{{ Storage::url($product->image) }}" alt="" class="image-card">
                                </div>
                            </div>

                        </div>

                        <div class="w-100 pt-3">
                            <div class="w-100 pt-3">
                                <label for="description">Description</label>
                                <input type="hidden" name="description" id="description"
                                    value="{{ old('description', $product->description) }}">
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <trix-editor input="description"></trix-editor>
                            </div>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/products'">Cancel</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <script>
            const name = document.querySelector('#name');
            const slug = document.querySelector('#slug');

            name.addEventListener('change', function() {
                fetch('/admin/products/checkSlug?name=' + name.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });

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

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            }
        </script>
    </section>
@endsection
