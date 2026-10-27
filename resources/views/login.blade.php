
    <title>Login</title>
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
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="container" style="max-width: 400px;">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
               <h4 class="fw-bold text-primary text-center">Mau pesan laundry?</h4>
                <p class="text-muted text-center fs-6 mb-4">Silahkan login terlebih dahulu</p>
                 
                
                <form method="POST" action="/login">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Login</button>
                    
                    <div class="text-center mt-3">
                        <p class="text-muted mb-0">Belum punya akun? <a href="/register" class="text-decoration-none">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
