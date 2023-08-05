<?php 
    // cek apakah tombol sudah di submit
    if( isset($_POST["submit"])){
        // cek apakah username/password benar
        if( $_POST["username"] == "adib" 
            || $_POST["password"] == 123){
            header("Location: latihan1.php");
            exit;
        } else{
            $error = true;
        }
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if(isset($error)) : ?>
        <p>username/password salah</p>
    <?php endif; ?>
    <!-- jika action kosong maka data akan dikirim ke file ini -->
    <!-- jika method kosong maka akan default get -->
    <form action="" method="post">
        <label for="username">username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password:</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>