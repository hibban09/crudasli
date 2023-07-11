<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
  <div class="row">
<div class="col-12">

    <h1>Edit form</h1>
</div>
</div>
<div class="row">
<div class="col-6">

<?php
include "koneksi.php";
$idpenulis=$_GET['idpenulis'];


$hasil=mysqli_query($conn,"SELECT * FROM penulis where idpenulis='$idpenulis'");
$baris=mysqli_fetch_array($hasil);

?>
<form action="update.php" method="POST">
<input type="hidden" class="form-control" name="idpenulis" value="<?php echo  $baris['idpenulis'] ?>">

<div class="form-group">
<label for="fname">Nama Penulis</label>
    <input type="text" class="form-control" name="nmpenulis" value="<?php echo  $baris['nmpenulis'] ?>">
  </div>
    

  <div class="form-group">
    <label for="fname">alamat</label>
 <textarea name="alamat" class="form-control"rows="10" cols="30"><?php echo  $baris['alamat'] ?>
</textarea> 
</div> 
<div class="form-group">
<label for="tgllahir">tanggal lahir</label>
  <input type="date" id="tgllahir" class="form-control" name="tgllahir" value="<?php echo  $baris['tgllahir'] ?>"> 
  </div>
<div class="form-group">
  <label for="tinggibadan">tinggi badan</label>
  <input type="number" id="tinggibadan" class="form-control" name="tinggibadan"value="<?php echo  $baris['tinggibadan'] ?>">
  </div>
  <div class="form-group">

<input type="submit" class="btn btn-secondary" value="submit">
&nbsp;
<input class="btn btn-danger" type="reset">
&nbsp;
<a class="btn btn-info" href="menampilkan.php">kembali</a>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>