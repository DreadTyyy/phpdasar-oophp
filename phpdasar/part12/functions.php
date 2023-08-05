<?php
    // koneksi ke dalam database
    $db =  mysqli_connect("localhost", "root","","phpdasar");

    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function add($data){
        global $db;
        // ambil data tiap elemen
        $tittle = htmlspecialchars($data["tittle"]);
        $tayang = htmlspecialchars($data["tayang"]);
        $rating = htmlspecialchars($data["rating"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query data
        $query = "INSERT INTO films VALUES(
            '','$tittle','$tayang',$rating,'$gambar'
            )";

        mysqli_query($db, $query);
            
        return mysqli_affected_rows($db);
    }

    function delete($id){
        global $db;
        mysqli_query($db, "DELETE FROM films WHERE id = '$id'");

        return mysqli_affected_rows($db);
    }

    function update($data){
        global $db;
        // ambil data tiap elemen
        $id = $data["id"];
        $tittle = htmlspecialchars($data["tittle"]);
        $tayang = htmlspecialchars($data["tayang"]);
        $rating = htmlspecialchars($data["rating"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query data
        $query = "UPDATE films SET
                tittle = '$tittle',
                tayang = '$tayang',
                rating = $rating,
                gambar = '$gambar'
                WHERE id = $id
                ";

        mysqli_query($db, $query);
            
        return mysqli_affected_rows($db);
    }

    function search($keyword){
        $query = "SELECT * FROM films WHERE
                tittle LIKE '%$keyword%'
                ";
        return query($query);
    }
?>