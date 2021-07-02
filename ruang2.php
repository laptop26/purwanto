<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Ruangan Yang Sudah Terdaftar</title>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<?php
$koneksi=new mysqli("localhost","root","","layanangizi");
$sql="SELECT * FROM `layananruang`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
?>
<div class="container">
  <h2>Cek Disini Jika Ruangan Anda Sudah Terdaftar</h2>
  <p>Berikut ini:</p> 
          
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Nomor Ruangan</th>
        <th>No RM</th>
        <th>Waktu Masuk</th>
		<th>Waktu Keluar</th>
      </tr>
    </thead>
    <tbody>
	<?php do{ 
	?>
      <tr>
        <td><?php echo $r['nomorruang'];?></td>
        <td><?php echo $r['norm'];?></td>
        <td><?php echo $r['waktumasuk'];?></td>
        <td><?php echo $r['waktukeluar'];?></td>
	</tr>
	<?php } while ($r=$q->fetch_array());
	?>

  <button type="submit"><a href="halamanawal.html" class="button">Home</a>
   
    </tbody>
  </table>
</div>
</body>
</html>