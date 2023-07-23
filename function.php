<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'vsga');

function daftar() {
    global $koneksi;
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $asal = $_POST['asal'];

    $tmb = "INSERT INTO siswa VALUES
            ('', '$nama', '$alamat', '$jk', '$agama', '$asal')";
    mysqli_query($koneksi,$tmb);

    return mysqli_affected_rows($koneksi);
}

function index($pendaftar) {
    global $koneksi;
    $query = mysqli_query($koneksi, $pendaftar);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $rows[] = $row;
    } return $rows;
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function ubah() {
    global $koneksi;
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal = $_POST['asal_sekolah'];

    $ubah = "UPDATE siswa SET 
                nama = '$nama', 
                alamat = '$alamat',
                jenis_kelamin = '$jk', 
                agama = '$agama', 
                asal_sekolah = '$asal' 
                WHERE id = $id";
    mysqli_query($koneksi, $ubah);
    return mysqli_affected_rows($koneksi);
}


?>