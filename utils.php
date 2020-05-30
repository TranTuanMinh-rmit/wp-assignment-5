<?php
    function hashPassword($password){
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        return $hashed;
    }

    function redirect($destination){
        echo 'Redirecting in 3...';
        header('refresh: 3; url: $destination');
    }

    function login($username, $password){
        // verify user login information
    }

    function register($username, $password, $address, $mobile){
        $query = "INSERT INTO Users 
                    VALUES ($username, $password, $address, $mobile, 'user')";

        $conn = new mysqli('localhost', 'username', 'password', 'assignment 5');
        if ($conn->query($query))
            echo "ERROR: $conn->error";
        else
            login($username, $password);
        $conn -> close();
    }

    function makeMod($username){
        // TODO: check if $_SESSION['user_role'] == 'admin'
        $query = "UPDATE [LOW PRIORITY] Users 
                    SET role='mod' 
                    WHERE userName=$username";

        $conn = new mysqli('localhost', 'username', 'password', 'assignment 5');
        if($conn -> query($query))
            echo "ERROR: $conn->error";
        $conn -> close();
    }

?>