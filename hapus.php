<?php 
include 'function.php';

$id = $_GET['id'];

if (hapus($id)) {
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'utama.php';
        </script>";
} else {
    echo "<script>
            alert('data gagal dihapus');
        </script>";
}

?>