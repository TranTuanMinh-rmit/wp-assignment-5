<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <div>
        <h1>Register</h1>
    </div>

    <form method="POST" action="login.php">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $_POST['username'];?>">

        <label>Password</label>
        <input type="password" name="password">

        <button type="submit" name="register">Login</button>
    </form>


</body>
</html>