<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="#" method="POST">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>

</html>