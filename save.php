<?php
include "koneksi.php";
$nmpenulis=$_POST['nmpenulis'];
$alamat= $_POST['alamat'];
$tgllahir=$_POST['tgllahir'];
$tinggibadan=$_POST['tinggibadan'];

mysqli_query($conn,"INSERT INTO penulis(nmpenulis,alamat,tgllahir,tinggibadan)
VALUES('$nmpenulis','$alamat','$tgllahir','$tinggibadan')");

header('Location: menampilkan.php');
?>