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

    <h1>tambah form</h1>
</div>
</div>
<div class="row">
<div class="col-6">
<form action="save.php" method="POST">
<div class="form-group">
<label for="fname">Nama Penulis</label>
    <input type="text" class="form-control" name="nmpenulis">
  </div>
    

  <div class="form-group">
    <label for="fname">alamat</label>
 <textarea name="alamat" class="form-control"rows="10" cols="30">
</textarea> 
</div>
<div class="form-group">
<label for="tgllahir">tanggal lahir</label>
  <input type="date" id="tgllahir" class="form-control" name="tgllahir">
  </div>
<div class="form-group">
  <label for="tinggibadan">tinggi badan</label>
  <input type="number" id="tinggibadan" class="form-control" name="tinggibadan">
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