<?php

use function PHPSTORM_META\type;

include ('utils.php');
    session_start();

    $username = $_POST['username'];
    $password = hashPassword($_POST['password']);

    $errors = array();

    $info = retrieveUserInfo($username);
    if (empty($username))
        array_push($errors, 'This field cannot be empty');
    if (is_string($info))
        array_push($errors, 'This username does not exist');
    if (empty($password))
        array_push($errors, 'This field cannot be empty');

    if (count($errors) == 0){
        if (isset($_POST['register'])){
            if ($password === $password_confirm){
                login($username, $password);
                redirect('index.html');
            }
        }
    }
?>

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

        <button type="submit" name="login">Login</button>
    </form>


</body>
</html>