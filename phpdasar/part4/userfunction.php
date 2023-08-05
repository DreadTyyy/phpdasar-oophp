<?php
    // User defined function 
    // Membuat function sendiri

    function greetings($waktu = "datang", $user = "user"){
        return "Selamat $waktu, $user"; 
    }

    function salam(){
        return "Happy" . " " . date("l");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar function</title>
    </head>
    <body>
        <h1><?= greetings("pagi")?> </h1>
        <p style="font-size:20px;"><?= salam() ?></p>
    </body>
</html>