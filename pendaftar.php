<?php 
include 'function.php';

$siswa = index("SELECT * FROM siswa");

$result = $koneksi->query("SELECT COUNT(*) AS total FROM siswa");
    $row = $result->fetch_assoc();
    $total_rows = $row['total'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-3">
        <h2>Siswa yang sudah mendaftar</h2>

        <div class="row mb-2">
            <div class="col-3">
                <a href="formDaftar.php">[+] Tambah Baru</a>
            </div>
            <div class="col-9 text-end">
                <button class="btn btn-danger"><a target="_blank" href="cetak.php" class="text-decoration-none text-white">Cetak Laporan</a></button>
            </div>
        </div>

    <table class="table table-bordered" cellpadding='10' cellspacing='0'>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>     
            <th>Tindakan</th>       
        </tr>

        <?php $i=1; ?>
        <?php foreach ($siswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['alamat']; ?></td>
                <td><?= $mhs['jenis_kelamin']; ?></td>
                <td><?= $mhs['agama']; ?></td>
                <td><?= $mhs['asal_sekolah']; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $mhs['id']; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $mhs['id']; ?>">hapus</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

        <p>Total: <?php echo $total_rows; ?></p>
    </div>


</body>
</html>