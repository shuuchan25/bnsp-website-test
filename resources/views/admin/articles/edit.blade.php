@extends('admin.partials.index')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Edit Article</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/articles/{{ $article->slug }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="title">Title</label>
                                <div class="w-100">
                                    <input type="text" name="title" id="title"
                                        class="@error('title') is-invalid @enderror" placeholder="Title"
                                        value="{{ old('title', $article->title) }}" required>
                                    @error('title')
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
                                        value="{{ old('slug', $article->slug) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100 pt-3">
                            <div class="w-100">
                                <label for="published_at">Date</label>
                                <div class="w-100">
                                    <input type="date" name="published_at" id="published_at"
                                        class="@error('published_at') is-invalid @enderror" placeholder="dd/mm/yyyy"
                                        value="{{ old('published_at', $article->published_at) }}" required>
                                    @error('published_at')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="author">Penulis</label>
                                <div class="">
                                    <input type="text" name="author" id="author"
                                        class="@error('author') is-invalid @enderror" placeholder="nama penulis"
                                        value="{{ old('author', $article->author) }}" required>
                                    @error('author')
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
                                        value="{{ old('image', $article->image) }}">
                                </div>
                                <div id="image-preview" class="w-100 pt-2">
                                    @if ($article->image)
                                        <div class="image-card">
                                            <img src="{{ asset('storage/' . $article->image) }}" alt="Gambar Artikel">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="content">Content</label>
                            <input type="hidden" name="content" id="content"
                                value="{{ old('content', $article->content) }}">
                            <trix-editor input="content"></trix-editor>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/articles'">Cancel</button>
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
