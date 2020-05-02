<?php
// functions untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pakaian") or die("Database salah!");

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
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $warna = htmlspecialchars($data['warna']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO pakaian
                VALUES
                ('','$foto','$nama','$harga','$warna','$ukuran','$stok')";
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
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $warna = htmlspecialchars($data['warna']);

    $query = "UPDATE pakaian
            SET
            foto = '$foto',
            nama = '$nama',
            harga = '$harga',
            stok = '$stok',
            ukuran = '$ukuran'
            WHERE warna = '$warna'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


