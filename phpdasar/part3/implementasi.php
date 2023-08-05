<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
        <style>
            .warna-ganjil{
                background-color: blue;
            }
            .warna-genap{
                background-color: red;
            }
        </style>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <!-- < ?php
                for( $i = 1; $i <= 3; $i++){
                    echo "<tr>";
                    for( $j = 1; $j < 6; $j++){
                        echo "<td>$i,$j</td>";
                    }
                    echo "</tr>";
                }
            ?> -->

            <?php for( $i=1; $i<=6; $i++) :?>
                <?php if($i % 2 == 0) : ?>
                    <tr class="warna-genap">
                <?php else : ?>
                    <tr class="warna-ganjil">
                <?php endif ?>
                    <?php for( $j=1; $j<=6; $j++) :?>
                    <td><?= "$i,$j";?></td>
                    <?php endfor?>
                </tr>
            <?php endfor?>
        </table>    

    </body>
</html>