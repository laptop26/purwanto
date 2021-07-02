<?php 
$koneksi=new mysqli("localhost","root","","layanangizi");
$sql="CREATE TABLE `layanangizi`.`layananruang` (
  `nomorruang` int(11) NOT NULL,
  `norm` varchar(10) NOT NULL,
  `waktumasuk` datetime DEFAULT current_timestamp(),
  `waktukeluar` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB;";
$q=$koneksi->query($sql);
 if ($q) {
	 echo "Tabel Layanan Ruang Sudah Dibuat !";
 } else {
	 echo "Tabel Layanan Ruang gagal Dibuat !";
 }
 ?>