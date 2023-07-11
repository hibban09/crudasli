<?php
include "koneksi.php";
$idpenulis=$_GET['idpenulis'];


mysqli_query($conn,"DELETE FROM penulis where idpenulis='$idpenulis'");
header('Location: menampilkan.php');

?>