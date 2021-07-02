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
  <h2>Data Pasien</h2>
  <form method="post">
    <div class="form-group">
      <label for="norm">No RM:</label>
      <input type="text" class="form-control" id="norm" placeholder="Isi Disini" name="norm">
    </div>
    <div class="form-group">
      <label for="noidpasien">No ID Pasien:</label>
      <input type="text" class="form-control" id="noidpasien" placeholder="Isi Disini" name="noidpasien">
    </div>
    <div class="form-group">
      <label for="jenisid">Jenis ID:</label>
      <input type="text" class="form-control" id="jenisid" placeholder="Isi Disini" name="jenisid">
    </div>
   <div class="form-group">
      <label for="namapasien">Nama Pasien:</label>
      <input type="text" class="form-control" id="namapasien" placeholder="Isi Disini" name="namapasien">
    </div>
     <div class="form-group">
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Isi Disini" name="alamat">
    </div>
       <div class="form-group">
         <label for="agama">Agama:</label>
         <input type="text" class="form-control" id="agama" placeholder="Isi Disini" name="agama">
       </div>
   <div class="form-group">
     <label for="golongandarah">Golongan Darah:</label>
     <input type="text" class="form-control" id="golongandarah" placeholder="Isi Disini" name="golongandarah">
   </div>
   <div class="form-group">
     <label for="tanggallahir">Tanggal Lahir:</label>
     <input type="datetime-local" class="form-control" id="tanggallahir" placeholder="Isi Disini" name="tanggallahir">
   </div>
   <div class="form-group">
     <label for="jeniskelamin">Jenis Kelamin:</label>
     <input type="text" class="form-control" id="jeniskelamin" placeholder="Isi Disini" name="jeniskelamin">
     </div>
   <div class="form-group">
     <label for="waktudaftar">Waktu Daftar:</label>
     <input type="datetime-local" class="form-control" id="waktudaftar" placeholder="Isi Disini" name="waktudaftar">
     </div>
   <div>   <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
   
  <button type="submit"><a href="daftarpasien.php" class="button">Daftar Pasien</a>
    <button type="submit"><a href="halamanawal.html" class="button">Home</a>
 </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])) {
	$norm=$_POST['norm'];
	$noidpasien=$_POST['noidpasien'];
	$jenisid=$_POST['jenisid'];
	$namapasien=$_POST['namapasien'];
	$alamat=$_POST['alamat'];
	$agama=$_POST['agama'];
	$golongandarah=$_POST['golongandarah'];
	$tanggallahir=$_POST['tanggallahir'];
  $jeniskelamin=$_POST['jeniskelamin'];
  $waktudaftar=$_POST['waktudaftar'];
	$koneksi=new mysqli("localhost","root","","layanangizi");
	$sql="INSERT INTO `pasien` (`norm`, `noidpasien`, `jenisid`, `namapasien`, `alamat`, `agama`, `golongandarah`, `tanggallahir`, `jeniskelamin`, `waktudaftar`) VALUES ('".$norm."', '".$noidpasien."', '".$jenisid."', '".$namapasien."', '".$alamat."', '".$agama."', '".$golongandarah."', '".$tanggallahir."', '".$jeniskelamin."', '".$waktudaftar."');";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Pasien Sudah Tersimpan !";
	} else {
		echo "Pasien Gagal Tersimpan !";
	}	
}
?>