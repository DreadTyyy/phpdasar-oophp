<?php
    // menampilkan array ke website dengan benar
    // menggunakan perulangan for atau foreach
    $numbers = [1,10,100,1000,10000,100000] 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .elemen{
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            border: 1px solid black;
            margin: 5px;
        }
        .satu{
            display: flex;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="satu">
    <?php for( $i=0; $i<count($numbers); $i++) : ?>
        <div class="elemen">
            <?php echo $numbers[$i]; ?>
        </div>
    <?php endfor ?>
    </div>
    <div class="satu">
        <?php foreach( $numbers as $number) : ?>
            <div class="elemen">
                <?= $number; ?>
            </div>    
        <?php endforeach ?>
    </div>

</body>
</html>