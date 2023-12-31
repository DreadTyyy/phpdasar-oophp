<?php
    session_start();
    require "functions.php";

    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
        
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        $result = mysqli_query($db, "SELECT * FROM users 
                WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
        
        if($id == $row["id"] && $key == hash('sha256',$row['username'])){
            $_SESSION['login'] = true;
        }
    }

    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }


    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($db, "SELECT * FROM users 
                WHERE username = '$username'");
        
        // cek username
        if(mysqli_num_rows($result) == 1){

            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                // set session
                $_SESSION["login"] = true;

                // jika remember me di pilih
                if(isset($_POST["remember"])){
                    setcookie('id', $row['id'], time()+60);
                    setcookie('key', hash('sha256',$row['username']), time()+60);
                }
                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if(isset($error)) :?>
        <p>username / password salah</p>
    <?php endif?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
            <li>
                <p>belum memiliki akun?</p>
                <a href="registrasi.php">Sign Up</a>
            </li>
        </ul>
    </form>
</body>
</html>