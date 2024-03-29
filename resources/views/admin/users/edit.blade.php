@extends('admin.partials.index')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah User</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/users/{{ $user->username }}" method="POST" class=""
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
                            @if ($user->image)
                                <img src="{{ Storage::url($user->image) }}" class="rounded-circle object-fit-cover"
                                    style="width: 250px; height: 250px" alt="">
                            @else
                                <img src="{{ asset('assets/images/pp1.png') }}" alt="Pp1" class="rounded-circle"
                                    style="width: 250px">
                            @endif
                            <input type="file" name="image" id="image"
                                class="@error('image') is-invalid @enderror w-50 mt-4"
                                value="{{ old('image', $user->image) }}" onchange="previewImage()">
                            <div id="image-preview">
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}"
                                        required placeholder="Nama">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="">Username</label>
                                <div class="w-100">
                                    <input type="text" name="username" id="username"
                                        class="@error('username') is-invalid @enderror"
                                        value="{{ old('username', $user->username) }}" required placeholder="Username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            @can('superadmin')
                                <div class="select-box w-100 pt-3 pt-md-0">
                                    <label for="roles">Roles</label>
                                    <select name="role_id" id="roles-select">
                                        <option value="">Roles</option>
                                        @foreach ($roles as $role)
                                            @if (old('role_id', $user->role_id) == $role->id)
                                                <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                            @else
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            @endcan
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="">Email</label>
                                <div class="w-100">
                                    <input type="email" name="email" id="email"
                                        class="@error('email') is-invalid @enderror"
                                        value="{{ old('email', $user->email) }}" required
                                        placeholder="nakulasadewa@gmail.com">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if (auth()->user()->id === $user->id)
                            <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                <div class="w-100 pt-3 pt-md-0">
                                    <label for="">Password</label>
                                    <div class="w-100">
                                        <input type="text" name="password" id="password"
                                            class="@error('password') is-invalid @enderror" value="{{ old('password') }}"
                                            placeholder="Masukkan Password Baru">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/users'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
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
                            img.classList.add('rounded-circle');
                            img.style.width = '250px';
                            img.style.height = '250px';
                            img.style.position = 'absolute';
                            img.style.objectFit = 'cover';
                            img.style.zIndex = '1';
                            img.style.marginTop = '-332px';
                            img.style.marginLeft = '-125px';
                            preview.appendChild(img);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            }
        </script>
    </section>
@endsection
