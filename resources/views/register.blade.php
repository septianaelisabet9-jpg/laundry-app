<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form action="/register" method="POST">
    @csrf 
    <p>Nama Lengkap: <input type="text" name="nama" required></p>
    <p>Username: <input type="text" name="username" required></p>
    <p>Email: <input type="email" name="email"></p>
    <p>Password: <input type="password" name="password" required></p>
    <p>Konfirmasi Password: <input type="password" name="password_confirmation" required></p>
    
    <button type="submit">Register</button>
    <br><br>
    <p>Sudah punya akun? <a href="/login">Login</a></p>
</form>
</body>
</html>
