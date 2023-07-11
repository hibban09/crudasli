<html><head><title>form</title></head>
<body>
<form action="save.php" method="POST">
<label for="fname">Nama Penulis</label>
    <input type="text" name="nmpenulis">
    <br><br>
    <label for="fname">alamat</label>
 <textarea name="alamat" rows="10" cols="30">
</textarea> 
<br><br>
<label for="tgllahir">tanggal lahir</label>
  <input type="date" id="tgllahir" name="tgllahir">
  <br><br>
  <label for="tinggibadan">tinggi badan</label>
  <input type="number" id="tinggibadan" name="tinggibadan">
  <br><br>
<input type="submit" value="submit">
</form>
</body>
</html>