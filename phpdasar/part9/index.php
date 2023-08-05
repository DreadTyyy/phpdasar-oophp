<?php
    // koneksi ke dalam database
    // nama host, nama username, nama databases
    $db =  mysqli_connect("localhost", "root","","phpdasar");

    // mengambil data dari tabel films / query data
    $result = mysqli_query($db, "SELECT * FROM films");

    // cek apakah query berhasil atau gagal
    // var_dump($result); // output jika gagal maka output: false

    //  ambil data film dari objek result / fetch data
    
    // // mengambil array numerik
    // $film = mysqli_fetch_row($result);
    
    // // mengambil array numerik dan assosiative
    // $film = mysqli_fetch_array($result);
    
    // mengambil array assosiative
    // while ($film = mysqli_fetch_assoc($result)){
    //     var_dump($film["tittle"]);
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Nongki Nobar</title>
</head>
<body>

    <h1>Daftar Film di Nongki Nobar</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>    
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Tittle</th>
            <th>Rating</th>
            <th>Tayang</th>
        </tr>
        <?php 
            $i = 1;
            while($film = mysqli_fetch_assoc($result)) : 
        ?>
        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="">edit</a> |
                <a href="">hapus</a>
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
            endwhile; 
        ?>
    </table>

</body>
</html>