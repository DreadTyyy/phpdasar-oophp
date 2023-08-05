<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    // mengambil utility yang ada di functions.php 
    require "functions.php";

    $perPage = 4;
    $jumlahData = count(query("SELECT * FROM films"));
    $totalPage = ceil($jumlahData / $perPage);

    // cek apakah ada data page yang terkirim
    if(isset($_GET["page"])){
        $currentPage = $_GET["page"];
    } else{
        $currentPage = 1;
    }
    $firstIndex = $currentPage*$perPage-$perPage;
    $films = query("SELECT*FROM films ORDER BY id DESC LIMIT $firstIndex,$perPage");

    // ambil data sesuai pencarian
    if(isset($_GET["search"])){
        $films = search($_GET["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Nongki Nobar</title>
    <style>
        .pagination{
            display: flex;
            margin-top: 10px;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        .pagination a{
            color: black;
            border: 1px solid black;
            font-size: 1rem;
            padding: .4rem;
            text-decoration: none;
        }
        .pagination a.active{
            color: white;
            background-color: red;
            border: none;
        }

    </style>
</head>
<body>
    <h3>Selamat datang, Admin Nongki Nobar</h3>
    <a href="logout.php">Logout</a>
    <h1>Daftar Film di Nongki Nobar</h1>

    <a href="add.php">Tambah Data Film</a>
    <form action="" method="get">
        <input type="text" name="keyword" size="30" 
        placeholder="search here!" autocomplete="off">
        <button type="submit" name="search">Search</button>
    </form>

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
            $i = $firstIndex + 1;
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
    </table>
    <div class="pagination">
        <?php if($currentPage > 1) :?>
            <?php $i = $currentPage - 1?>
            <a href="index.php?page=<?=$i;?>">&laquo;</a>
        <?php endif;?>
        <div class="page-tabs">
            <?php for($i=1; $i<=$totalPage; $i++) :?>
                <?php if($i == $currentPage) :?>
                    <a href="index.php?page=<?= $i;?>" class="active"><?= $i;?></a>
                    <?php else :?>
                        <a href="index.php?page=<?= $i;?>"><?= $i;?></a>
                <?php endif;?>
            <?php endfor;?>
        </div>
        <?php if($currentPage < $totalPage) :?>
            <?php $i = $currentPage + 1?>
            <a href="index.php?page=<?=$i;?>">&raquo;</a>
        <?php endif;?>
    </div>

</body>
</html>