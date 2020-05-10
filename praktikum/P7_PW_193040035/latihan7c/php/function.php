<?php
// functions untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040035") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//function untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $harga = htmlspecialchars($data['harga']);
    $nama = htmlspecialchars($data['nama']);
    $stok = htmlspecialchars($data['stok']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);

    $query = "INSERT INTO pakaian
                VALUES
                ('','$foto','$harga','$nama','$stok','$ukuran','$warna')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//function untuk menghapuskan data didalam database
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//function untuk mengubah data didalam database
function ubah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $harga = htmlspecialchars($data['harga']);
    $nama = htmlspecialchars($data['nama']);
    $stok = htmlspecialchars($data['stok']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);

    $query = "UPDATE pakaian
            SET
            foto = '$foto',
            harga = '$harga',
            nama = '$nama',
            stok = '$stok',
            ukuran = '$ukuran',
            WHERE warna = '$warna'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //CEK USERNAME SUDAH ADA ATAU BELUM
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert(Username Sudah Digunakan!);
            </script>";
        return false;
    }

    //ENKRIPSI PASSWORD
    $password = password_hash($password, PASSWORD_DEFAULT);

    //TAMBAH USER BARU
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
