<?php 
include 'function.php';

$id = $_GET['id'];

$siswa = index("SELECT * FROM siswa WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    
    if (ubah($_POST)) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'utama.php';
            </script>";
    } else {
        echo "<script>
                alert('data gagal diubah');
            </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <h2 class="mt-3 ms-5 ps-5">Formulir Edit Siswa Baru</h2>
    <div class="container border-2 border w-50 m-3 p-2">
            <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $siswa['id']; ?>">
            <div class="row mb-3">
                <div class="col-3">
                <label for="nama" class="form-label">Nama :</label>
            </div>
            <div class="col-9">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="nama lengkap" value="<?= $siswa['nama']; ?>">
            </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="alamat" class="form-label">Alamat :</label>
                </div>
                <div class="col-9">
                    <textarea name="alamat" id="alamat" cols="30" rows="8" class="form-control" value="<?= $siswa['alamat']; ?>"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="jk" class="form-label">Jenis Kelamin :</label>            
                </div>
                <div class="col-9">
                    <input type="radio" name="jenis_kelamin" id="jk" value="laki-laki" class="form-check-input"> Laki-laki
                    <input type="radio" name="jenis_kelamin" id="jk" value="perempuan" class="form-check-input ms-4"> Perempuan
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="agama" class="form-label">Agama :</label>            
                </div>
                <div class="col-9">
                    <select name="agama" id="agama" class="form-control">
                        <option value="">--Pilih Satu--</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Katolik">Katolik</option>
                    </select>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-3">
                    <label for="asal" class="form-label">Sekolah Asal :</label>            
                </div>
                <div class="col-9">
                    <input type="text" name="asal_sekolah" id="asal" class="form-control" placeholder="nama sekolah" value="<?= $siswa['asal_sekolah']; ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary col-3 mt-2" name="ubah">ubah</button>
        </form>
    </div>
</body>
</html>