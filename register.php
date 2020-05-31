<?php
    include('utils.php');
    session_start();

    $username = $_POST['username'];
    $password = hashPassword($_POST['password']);
    $password_confirm = hashPassword($_POST['password-confirm']);
    $address = $_POST['address'];
    $mobile= $_POST['mobile'];

    $errors = array();

    if (empty($username)){
        array_push($errors, "This field cannot be empty");
    }
    if (empty($password)){
        array_push($errors, "This field cannot be empty");
    }
    if (empty($password_confirm)){
        array_push($errors, "This field cannot be empty");
    }
    if (empty($address)){
        array_push($errors, "This field cannot be empty");
    }
    if (empty($mobile)){
        array_push($errors, "This field cannot be empty");
    }
    if ($password != $password_confirm){
        array_push($errors, "Passwords do not match");
    }

    if (count($errors) == 0){  // no error in form

        if (isset($_POST['register'])){
            if ($password === $password_confirm){
                register($username, $password, $address, $mobile);
                redirect('index.php');
            }
        }
    }

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

        <label>Address</label>
        <input type="text" name="address" value="<?php echo $_POST['address'];?>">

        <label>Mobile</label>
        <input type="text" name="mobile" value="<?php echo $_POST['mobile'];?>">

        <button type="submit" name="register">Register</button>
    </form>
    <p>
        Already have an account? <a href="login.php">Log In</a>
    </p>

</body>
</html>