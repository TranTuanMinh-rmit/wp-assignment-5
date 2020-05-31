<?php
    function hashPassword($password){
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        return $hashed;
    }

    function redirect($destination){
        echo 'Redirecting in 3...';
        header('refresh: 3; url: $destination');
    }

    function retrieveUserInfo($username){
        $conn = new mysqli('localhost', 'username', 'password', 'assignment 5');
        $query = "SELECT password, role FROM Users WHERE username=$username";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];
            $role = $row['role'];
            return array($storedPassword, $role);
        }
        else{
            return 'This username does not exist';
        }
    }

    function login($username, $password){
        // verify user login information
        $info = retrieveUserInfo($username);
        $storedPassword = $info[0];
        $role = $info[1];

        // add user info to $_SESSION
        if ($password == $storedPassword){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
        }
    }

    function logout(){
        session_start();
        session_destroy();
        unset($_SESSION['username']);
        redirect('index.php');
    }

    function getUserRole(){
        return $_SESSION['user']['role'];
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

    function addToCart($productName, $quantity){
        $productInfo = retrieveProductInfo($productName);
        $productInfo['quantity'] = $quantity;
        if(in_array($_SESSION['cart'], $productName)) {  // item not in cart
            array_push($_SESSION['cart'], $productInfo);
        }
        else{   // update item in cart
            foreach($_SESSION['cart'] as $item){
                if ($item['productName'] === $productName)
                    $item['quantity'] += $quantity;
            }
        }
    }

    function retrieveProductInfo($productName){
        $conn = new mysqli('localhost', 'username', 'password', 'assignment 5');

        $query = "SELECT * FROM Products WHERE productName=$productName";
        $result = $conn -> query($query);
        $rows = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);
        return $rows;
    }
?>