<?php 
    // data film

    $films = [
        [
            "poster" => "pengabdi setan.jpg",
            "tittle" => "Pengabdi Setan",
            "tayang" => "28 September 2017",
            "rating" => "9,3/10",
        ],
        [
            "poster" => "danur.jpg",
            "tittle" => "Danur",
            "tayang" => "30 Maret 2017",
            "rating" => "8,6/10",
        ],        
        [
            "poster" => "PTJ.jpg",
            "tittle" => "Perempuan Tanah Jahannam",
            "tayang" => "17 Oktober 2019",
            "rating" => "8,9/10",
        ],
        [
            "poster" => "sewu dino.jpg",
            "tittle" => "Sewu Dino",
            "tayang" => "16 Juni 2023",
            "rating" => "9/10",
        ]
    ] 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nobar FILM</title>
    <style>
        body{
            margin: 20px;
        }
        .container{
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .daftar{
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .container img{
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Daftar Film di Nobar FILM</h1>

    <div class="container">
        <?php foreach( $films as $film) : ?>
        <div class="daftar">
            <img src="img/<?= $film["poster"] ?>" 
            alt="poster film">
            <div class="tittle"> <?= $film["tittle"] ?> </div>
            <div class="tayang"> <?= $film["tayang"] ?> </div>
            <div class="rating"> <?= $film["rating"] ?> </div>
        </div>
        <?php endforeach; ?>
    </div>
    
</body>
</html>