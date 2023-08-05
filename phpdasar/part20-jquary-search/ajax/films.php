<?php
    require "../functions.php";

    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM films WHERE tittle LIKE '%$keyword%'";
    $films = query($query);   
    $foundData = count($films);

?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>    
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Tittle</th>
        <th>Rating</th>
        <th>Tayang</th>
    </tr>
    <tr >
    <?php if($foundData == 0) : ?>
        <td colspan="6" align="center">Belum ada data yang sesuai dengan pencarian anda.</td>
    </tr>
    <?php else :?>
    <?php 
        $i = 1;
        foreach($films as $film) : 
    ?>
    <tr>
        <td><?= $i;?></td>
        <td>
            <a href="update.php?id=<?=$film["id"]?>">edit</a> |
            <a 
            href="delete.php?id=<?=$film["id"]?>"
            <?php $tittle = $film["tittle"];?>
            onclick="return confirm(
                'Apakah anda ingin menghapus data <?=$tittle;?> ?'
                )"
            >hapus</a>
        </td>
        <td>
            <img 
            src="img/<?= $film["gambar"]; ?>" 
                    alt="poster"
                    width="70">
        </td>
        <td><?= $film["tittle"];?></td>
        <td><?= $film["tayang"];?></td>
        <td><?= $film["rating"];?></td>
    </tr>
    <?php 
         $i++;
        endforeach; 
    ?>
    <?php endif;?>

</table>