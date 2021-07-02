<!DOCTYPE html>
<html lang="en">
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
<body>

<div class="container">
  <h2>Input Layanan Ruang</h2>
  <form method="post">
    <div class="form-group">
      <label for="nomorruang">Nomor Ruang:</label>
      <input type="text" class="form-control" id="nomorruang" placeholder="Isi Disini" name="nomorruang">
    </div>
    <div class="form-group">
      <label for="norm">No RM:</label>
      <input type="text" class="form-control" id="norm" placeholder="Isi Disini" name="norm">
    </div>
    <div class="form-group">
      <label for="waktumasuk">Waktu Masuk</label>
      <input type="datetime-local" class="form-control" id="waktumasuk" placeholder="Isi Disini" name="waktumasuk">
    </div>
   <div class="form-group">
      <label for="waktukeluar">Waktu Keluar:</label>
      <input type="datetime-local" class="form-control" id="waktukeluar" placeholder="Isi Disini" name="waktukeluar">
    </div>
    
     </div>
   <div>   <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
   
  <button type="submit"><a href="ruang2.php" class="button">Cek Ruang Sudah Terdaftar atau Belum</a>
    <button type="submit"><a href="halamanawal.html" class="button">Home</a>
 </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])) {
	$nomorruang=$_POST['nomorruang'];
	$norm=$_POST['norm'];
	$waktumasuk=$_POST['waktumasuk'];
	$waktukeluar=$_POST['waktukeluar'];
	$koneksi=new mysqli("localhost","root","","layanangizi");
	$sql="INSERT INTO `layananruang` (`nomorruang`, `norm`, `waktumasuk`, `waktukeluar`) VALUES ('".$nomorruang."', '".$norm."', '".$waktumasuk."', '".$waktukeluar."');";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Ruangan Telah Terdaftar !";
	} else {
		echo "Ruangan Gagal Tersimpan !";
	}	
}
?>