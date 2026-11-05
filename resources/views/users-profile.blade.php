
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <main class="container mt-5">

        <div class="pagetitle">
            <h1>My Profile</h1>
            <p>Kelola informasi dan foto profil kamu.</p>
        </div>

        <div class="card">
            <div class="card-body pt-4">

                <div class="text-center mb-4">

                    @if(session('foto'))
                        <img src="{{ asset('storage/profile/' . session('foto')) }}"
                             class="rounded-circle"
                             width="150"
                             height="150"
                             style="object-fit: cover;">
                    @else
                        <img src="{{ asset('assets/img/profile-img.jpg') }}"
                             class="rounded-circle"
                             width="150"
                             height="150">
                    @endif

                    <h4 class="mt-3">{{ session('u') }}</h4>

                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ url('/profile/update-foto') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Pilih Foto Profil</label>
                        <input type="file"
                               name="foto"
                               class="form-control"
                               accept="image/*"
                               required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-upload"></i>
                        Simpan Foto
                    </button>

                    <button>
                        <a href="/home" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Home</a>
                    </button>

                </form>

            </div>
        </div>

    </main>

</body>
</html>
