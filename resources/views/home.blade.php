<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=dge">
    <title>Document</title>
</head>
<body>
    <div style="border: 3px solid black;">
    <h1> Register</h1>
    <form action="/register" method="POST">
        @csrf
        <label> Username</label>
        <input type="text" name="username" placeholder="n=Username">
        <label> Email</label>
        <input type="text" name="email" placeholder="Email">
        <label> Password </label>
        <input type="password" name="password" placeholder="password">
        <input type="submit">
    </form>
</body>
</html>