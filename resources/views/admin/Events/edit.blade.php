@extends('admin.partials.index')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit Review</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/reviews/{{ $review->slug }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Title</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror" value="{{ old('name', $review->name) }}"
                                        required placeholder="Title">
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
                                        class="@error('slug') is-invalid @enderror" value="{{ old('slug', $review->slug) }}"
                                        required placeholder="Slug ">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Alternative Name</label>
                                <div class="w-100">
                                    <input type="text" name="kanji" id="kanji"
                                        class="@error('kanji') is-invalid @enderror"
                                        value="{{ old('kanji', $review->kanji) }}" required placeholder="Alternative Name">
                                    @error('kanji')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="">Genre</label>
                                <div class="w-100">
                                    <input type="text" name="genre" id="genre"
                                        class="@error('genre') is-invalid @enderror"
                                        value="{{ old('genre', $review->genre) }}" required
                                        placeholder="Slug Destinasi Wisata">
                                    @error('genre')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="select-box w-100">
                                <label for="kategori">Category</label>
                                <div class="select-box">
                                    <select name="category_id">
                                        @foreach ($categories as $category)
                                            @if (old('category_id', $review->category_id) == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="">Author</label>
                                <div class="w-100">
                                    <input type="text" name="author" id="author"
                                        class="@error('author') is-invalid @enderror"
                                        value="{{ old('author', $review->author) }}" required>
                                    @error('author')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Cover Image (Max. 1 file & 5MB)</label>
                                <div class="w-100">
                                    <input type="file" name="image" id="image"
                                        class="@error('image') is-invalid @enderror"
                                        value="{{ old('image', $review->image) }}" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div id="image-preview" class="image-list w-100 pt-2">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <div class="w-100 pt-3">
                                <label for="synopsis">Synopsis</label>
                                <input type="hidden" name="synopsis" id="synopsis"
                                    value="{{ old('synopsis', $review->synopsis) }}">
                                @error('synopsis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <trix-editor input="synopsis"></trix-editor>
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <div class="w-100 pt-3">
                                <label for="review">Review</label>
                                <input type="hidden" name="review" id="review"
                                    value="{{ old('review', $review->review) }}">
                                @error('review')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <trix-editor input="review"></trix-editor>
                            </div>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/reviews'">Cancel</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Save</button>
                        </div>
                    </form>
                </div>
                <div class="w-100 pt-3 mt-3 border-top">
                    @if (session('success'))
                        <div id="alert-success" class="alert alert-success w-100">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div id="alert-danger" class="alert alert-danger w-100">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="modal-body add-form pb-3">
                        <form action="/admin/review-images/{{ $review->id }}" method="POST" class=""
                            enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div id="image-previews" class="image-list w-100 pt-2">
                                </div>
                                <div class="pt-2">
                                    <label for="">Other Images (Max. 6 File & 10MB)</label>
                                    <div class="d-md-flex w-100 align-items-center justify-content-between gap-3">
                                        <div class="w-100">
                                            <input type="file" name="other_image[]" id="other_image"
                                                class="file-input" onchange="previewImages()" multiple>
                                        </div>
                                        <div class="modal-footer m-0 pt-3 pt-md-0">
                                            <button type="submit" class="btn save-btn mb-0 me-0">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <h5>
                            Images
                        </h5>
                        @if (isset($review->image) ||
                                (isset($other_images) && (is_array($other_images) || is_object($other_images)) && count($other_images)) > 0)
                            <div class="image-list pt-3 w-100 d-flex gap-2">
                                <div class="image-item pe-4 me-3 border-end">
                                    <div class="image-card mb-1">
                                        <img src="{{ asset('storage/' . $review->image) }}" alt="">
                                    </div>
                                    Cover Image
                                </div>
                                @foreach ($other_images as $other_image)
                                    <div class="image-item">
                                        <div class="image-card">
                                            <img src="{{ asset('storage/' . $other_image->other_image) }}"
                                                alt="">
                                        </div>
                                        <form action="{{ route('admin.reviewimages.destroy', $other_image->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this data?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-item">
                                                <svg width="20" height="20" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M23.8615 11.064C24.3571 11.1048 24.7267 11.538 24.6871 12.0336C24.6799 12.1152 24.0295 20.1684 23.6551 23.5464C23.4223 25.6428 22.0375 26.9184 19.9471 26.9568C18.3475 26.9844 16.8043 27 15.2959 27C13.6699 27 12.0847 26.982 10.5163 26.9496C8.50987 26.91 7.12147 25.6092 6.89467 23.5548C6.51667 20.1468 5.86987 12.114 5.86387 12.0336C5.82307 11.538 6.19267 11.1036 6.68827 11.064C7.17667 11.0508 7.61827 11.394 7.65787 11.8884C7.6617 11.9405 7.92612 15.2208 8.21427 18.4665L8.27214 19.1142C8.41727 20.7274 8.56438 22.2776 8.68387 23.3568C8.81227 24.5244 9.44227 25.1268 10.5535 25.1496C13.5535 25.2132 16.6147 25.2168 19.9147 25.1568C21.0955 25.134 21.7339 24.5436 21.8659 23.3484C22.2379 19.9956 22.8859 11.97 22.8931 11.8884C22.9327 11.394 23.3707 11.0484 23.8615 11.064ZM17.8144 3.00037C18.916 3.00037 19.8844 3.74317 20.1688 4.80757L20.4736 6.32077C20.5721 6.81682 21.0074 7.17908 21.5115 7.18703L25.4496 7.18717C25.9464 7.18717 26.3496 7.59037 26.3496 8.08717C26.3496 8.58397 25.9464 8.98717 25.4496 8.98717L21.5467 8.98699C21.5406 8.98711 21.5345 8.98717 21.5284 8.98717L21.4992 8.98597L9.04989 8.98702C9.04022 8.98712 9.03053 8.98717 9.02083 8.98717L9.00235 8.98597L5.09995 8.98717C4.60315 8.98717 4.19995 8.58397 4.19995 8.08717C4.19995 7.59037 4.60315 7.18717 5.09995 7.18717L9.03715 7.18597L9.15838 7.17829C9.60992 7.11971 9.98519 6.77677 10.0768 6.32077L10.3684 4.86157C10.6648 3.74317 11.6332 3.00037 12.7348 3.00037H17.8144ZM17.8144 4.80037H12.7348C12.4468 4.80037 12.1936 4.99357 12.1204 5.27077L11.8408 6.67477C11.8053 6.8526 11.7536 7.02398 11.6873 7.18749H18.8623C18.796 7.02398 18.7441 6.8526 18.7084 6.67477L18.4168 5.21557C18.3556 4.99357 18.1024 4.80037 17.8144 4.80037Z"
                                                        fill="currentColor" />
                                                </svg>
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>Tidak ada gambar yang tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <script>
            const name = document.querySelector('#name');
            const slug = document.querySelector('#slug');

            name.addEventListener('change', function() {
                fetch('/admin/reviews/checkSlug?name=' + name.value)
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

            function previewImages() {
                var input = document.getElementById('other_image');
                var preview = document.getElementById('image-previews');

                preview.innerHTML = '';

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (var i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            var card = document.createElement('div');
                            card.classList.add('image-card');

                            var img = document.createElement('img');
                            img.src = event.target.result;

                            card.appendChild(img);
                            preview.appendChild(card);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
        </script>
    </section>
@endsection
