<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Layanan Gizi</title>
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
$sql="SELECT * FROM `layanangizi`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
?>
<div class="container">
  <h2>Layanan Gizi Yang Terdaftar</h2>
  <p>Berikut ini:</p> 
          
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>ID Layanan Gizi</th>
        <th>No RM</th>
        <th>Waktu Layanan</th>
		<th>Diet</th>
      </tr>
    </thead>
    <tbody>
	<?php do{ 
	?>
      <tr>
        <td><?php echo $r['idlayanangizi'];?></td>
        <td><?php echo $r['norm'];?></td>
        <td><?php echo $r['waktulayanan'];?></td>
        <td><?php echo $r['diet'];?></td>
	</tr>
	<?php } while ($r=$q->fetch_array());
	?>

  <button type="submit"><a href="halamanawal.html" class="button">Home</a>
   
    </tbody>
  </table>
</div>
</body>
</html>