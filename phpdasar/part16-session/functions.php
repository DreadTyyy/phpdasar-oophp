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
        $gambar = upload();
        if(!$gambar){
            return false;
        }

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

        if($_FILES["gambar"]["error"] === 4){
            $gambar = htmlspecialchars($data["gambarLama"]);
        } else{
            $gambar = upload();
        }

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

    function upload(){

        // ambil data gambar
        $namaFile = $_FILES["gambar"]["name"];
        $tmpName = $_FILES["gambar"]["tmp_name"];
        $error = $_FILES["gambar"]["error"];

        // cek apakah ada gambar yang diupload
        if($error === 4){
            echo "<script>
                    alert('Silahkan masukkan gambar terlebih dahulu!')
                </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $validEkstension = ["jpg", "jpeg", "png"];
        $ekstensionFile = explode(".", $namaFile);
        $ekstensionFile = strtolower(end($ekstensionFile));
        if(!in_array($ekstensionFile, $validEkstension)){
            echo "<script>
                    alert('Hanya format jpg, jpeg, png!')
                </script>";
            return false;
        }
        
        // gambar diupload ke dir dan db
        // generate nama file agar tidak ada nama yang sama dari user
        $namaFile = uniqid();
        $generateNamaFile = $namaFile;
        $generateNamaFile .= ".";
        $generateNamaFile .= "png"; 
        move_uploaded_file($tmpName, 'img/' . $generateNamaFile);

        return $generateNamaFile;
    }

    function search($keyword){
        $query = "SELECT * FROM films WHERE
                tittle LIKE '%$keyword%'
                ";
        return query($query);
    }

    function registrasi($data){
        global $db;

        $username = strtolower($data["username"]);
        $password = mysqli_real_escape_string($db, $data["password"]);
        $password2 = mysqli_real_escape_string($db, $data["password2"]);

        // cek agar tidak ada duplikat username
        $cekUsername = mysqli_query($db, "SELECT username FROM users 
                        WHERE username = '$username'" );
        if(mysqli_fetch_assoc($cekUsername)){
            echo "<script>
                alert('Username sudah terdaftar')
            </script>";
            return false;
        }


        // cek konfirm password
        if($password !== $password2){
            echo "<script>
                alert('Password yang anda masukkan berbeda')
            </script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // masukkan ke database
        mysqli_query($db, "INSERT INTO users VALUES (
            '', 
            '$username',
            '$password')"
            );

        return mysqli_affected_rows($db);
    }
    function login(){
        
    }
?>