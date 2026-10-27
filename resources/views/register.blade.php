<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Memanggil CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background-image: url('{{ asset("img/laundry.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-start vh-100" style="padding-left: 8%;">

    <div class="container" style="max-width: 400px;">
        <div class="card shadow-lg border-0 bg-white bg-opacity-75" style="backdrop-filter: blur(5px);">
            <div class="card-body p-3">
                <h4 class="fw-bold text-primary text-center">Buat Akun Laundry</h4>
                <p class="text-muted text-center fs-6 mb-4">Silahkan lengkapi data diri kamu</p>
                
                <form action="/register" method="POST">
                    @csrf 
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-semibold">Konfirmasi Password:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Register</button>
                    
                    <div class="text-center mt-3">
                        <p class="text-muted mb-0">Sudah punya akun? <a href="/login" class="text-decoration-none fw-semibold">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>