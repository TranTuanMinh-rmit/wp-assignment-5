<?php
    include('utils.php');
    session_start();


?>

<html>
<head>
    <title>Register Page</title>
</head>
<body>
    <div>
        <h1>Register</h1>
    </div>

    <form method="POST" action="register.php">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $_POST['username'];?>">

        <label>Password</label>
        <input type="password" name="password">

        <label>Confirm Password</label>
        <input type="password" name="password-confirm">

        <button type="submit" name="register">Register</button>
    </form>
    <p>
        Already have an account? <a href="login.php">Log In</a>
    </p>

</body>
</html>