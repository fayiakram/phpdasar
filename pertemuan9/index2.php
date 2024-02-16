<?php
// koneksi ke database
// parameter nya urutan (nama server, nama user, password, nama database)
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa
// ada 2 parameter 
// 1. koneksi databasenya yang mysqli_conect masukan sebagai parameter
// 2. string query nya
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keudanya
// mysqli_fetch_object() // 

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs["nama"]);
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <a href="">ubah</a> | <a href="">Hapus</a>
                </td>
                <td><img src="./image/landcruiser.png" alt="" width="50"></td>
                <td><?php echo $row["nrp"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["jurusan"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>




    </table>
</body>

</html>