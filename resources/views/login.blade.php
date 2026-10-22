<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h2>SILAHKAN LOGIN TERLEBIH DAHULU!!</h2>
    <form method="POST" action="/login">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
        <br>
        <p>Belum punya akun?
         <a href="/register">Register</a></p>
    </form>