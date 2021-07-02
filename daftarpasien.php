<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Pasien</title>
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
$sql="SELECT * FROM `pasien`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
?>
<div class="container">
  <h2>Pasien Yang Terdaftar</h2>
  <p>Berikut ini:</p> 
          
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>No RM</th>
        <th>NO ID Pasien</th>
        <th>Jenis ID</th>
		<th>Nama Pasien</th>
		<th>Alamat</th>
		<th>Agama</th>
      <th>Golongan Darah</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Waktu Daftar</th>
      </tr>
    </thead>
    <tbody>
	<?php do{ 
	?>
      <tr>
        <td><?php echo $r['norm'];?></td>
        <td><?php echo $r['noidpasien'];?></td>
        <td><?php echo $r['jenisid'];?></td>
        <td><?php echo $r['namapasien'];?></td>
        <td><?php echo $r['alamat'];?></td>
        <td><?php echo $r['agama'];?></td>
        <td><?php echo $r['golongandarah'];?></td>
        <td><?php echo $r['tanggallahir'];?></td>
        <td><?php echo $r['jeniskelamin'];?></td>
        <td><?php echo $r['waktudaftar'];?></td>
	</tr>
	<?php } while ($r=$q->fetch_array());
	?>

  <button type="submit"><a href="halamanawal.html" class="button">Home</a>
   
    </tbody>
  </table>
</div>
</body>
</html>