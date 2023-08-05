<?php 
    // Variable Scope
    // $x = 10;
    
    // function tampilX(){
    //     // harus menambahkan global untuk akses var diluar
    //     global $x;
    //     echo $x;
    // }

    // tampilX()

    // SUPERGLOBAL => variabel milik PHP
    // Mrupakan array assosiative
    // $_GET || $_POST || $_ REQUEST || $_SESSION
    // $_COOKIE || $_SERVER || $_POST
    
    // $_GET dan $_POST
    // $_GET["tittle"] = "Pengabdi Setan";
    // $_GET["rating"] = "9/10";
    // var_dump($_GET);
    
    $films = [
        [
            "tittle" => "Pengabdi Setan",
            "tayang" => "28 September 2017",
            "rating" => "9,3/10",
        ],
        [
            "tittle" => "Danur",
            "tayang" => "30 Maret 2017",
            "rating" => "8,6/10",
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Nobar Film</h1>
    <ul>
        <?php foreach( $films as $film) : ?>
            <li>
                <a 
                href="latihan2.php?tittle=<?=$film["tittle"];?>&tayang=<?=$film["tayang"];?>&rating=<?=$film["rating"];?>"
                >
                <?= $film["tittle"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="latihan3.php">logout</a>
</body>
</html>