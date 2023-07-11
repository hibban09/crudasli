<?php

include "koneksi.php";
$idpenulis=$_POST['idpenulis'];
$nmpenulis=$_POST['nmpenulis'];
$alamat= $_POST['alamat'];
$tgllahir=$_POST['tgllahir'];
$tinggibadan=$_POST['tinggibadan'];
mysqli_query($conn,"UPDATE penulis set nmpenulis='$nmpenulis',alamat='$alamat', tgllahir='$tgllahir', tinggibadan='$tinggibadan'  WHERE idpenulis='$idpenulis'");
header('Location: menampilkan.php');


?>