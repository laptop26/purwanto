<?php
$koneksi=new mysqli("localhost","root","","layanangizi");
$sql="CREATE TABLE `layanangizi`.`layanangizi` (
  `idlayanangizi` int(11) NOT NULL,
  `norm` varchar(10) NOT NULL,
  `waktulayanan` datetime NOT NULL DEFAULT current_timestamp(),
  `diet` text NOT NULL
) ENGINE=InnoDB;";
$q=$koneksi->query($sql);
if ($q) {
	echo "Tabel Layanan Gizi Berhasil Dibuat !";
} else {
	echo "Tabel Layanan Gizi Gagal Dibuat !";
}
?>