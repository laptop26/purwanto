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
  <h2>Input Layanan Gizi</h2>
  <form method="post">
    <div class="form-group">
      <label for="idlayanangizi">ID Layanan Gizi:</label>
      <input type="text" class="form-control" id="idlayanangizi" placeholder="Isi Disini" name="idlayanangizi">
    </div>
    <div class="form-group">
      <label for="norm">No RM:</label>
      <input type="text" class="form-control" id="norm" placeholder="Isi Disini" name="norm">
    </div>
    <div class="form-group">
      <label for="waktulayanan">Waktu Layanan:</label>
      <input type="datetime-local" class="form-control" id="waktulayanan" placeholder="Isi Disini" name="waktulayanan">
    </div>
   <div class="form-group">
      <label for="diet">Diet:</label>
      <input type="text" class="form-control" id="diet" placeholder="Isi Disini" name="diet">
    </div>
    
     </div>
   <div>   <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
   
  <button type="submit"><a href="gizi2.php" class="button">Cek Layanan Gizi Sudah Terdaftar atau Belum</a>
    <button type="submit"><a href="halamanawal.html" class="button">Home</a>
 </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])) {
	$idlayanangizi=$_POST['idlayanangizi'];
	$norm=$_POST['norm'];
	$waktulayanan=$_POST['waktulayanan'];
	$diet=$_POST['diet'];
	$koneksi=new mysqli("localhost","root","","layanangizi");
	$sql="INSERT INTO `layanangizi` (`idlayanangizi`, `norm`, `waktulayanan`, `diet`) VALUES ('".$idlayanangizi."', '".$norm."', '".$waktulayanan."', '".$diet."');";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Layanan Untuk Gizi Sudah Terdaftar !";
	} else {
		echo "Layanan Gagal Terdaftar !";
	}	
}
?>