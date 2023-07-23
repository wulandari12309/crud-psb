<!DOCTYPE html>
<html>
<head>
 <title>Cetak PDF</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Jenis Kelamin</th>
 <th>Agama</th>
 <th>Sekolah Asal</th>
 </tr>
 <?php 
 
 $koneksi = mysqli_connect("localhost","root","","vsga");

 
 $data = mysqli_query($koneksi,"select * from siswa");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id'] ?></td>
 <td><?php echo $d['nama']; ?></td>
 <td><?php echo $d['alamat']; ?></td>
 <td><?php echo $d['jenis_kelamin']; ?></td>
 <td><?php echo $d['agama']; ?></td>
 <td><?php echo $d['asal_sekolah']; ?> </td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>