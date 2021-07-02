<?php 
 $koneksi=new mysqli("localhost","root","");
 $sql="create database layanangizi";
 $q=$koneksi->query($sql);
 if ($q) {
	 echo "Database sudah dibuat !";
 } else {
	 echo "Database gagal dibuat !";
 }
 $sql2="CREATE TABLE layanangizi.`pasien`(
  `norm` int(11) NOT NULL,
  `noidpasien` varchar(20) NOT NULL,
  `jenisid` enum('KTP','SIM','Paspor','Lain-lain') NOT NULL,
  `namapasien` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('Islam','Katolik','Kristen','Hindu','Budha') NOT NULL,
  `golongandarah` enum('A','B','AB','O') NOT NULL,
  `tanggallahir` datetime NOT NULL,
  `jeniskelamin` enum('Perempuan','Laki-laki','','') NOT NULL,
  `waktudaftar` datetime NOT NULL
) ENGINE=InnoDB ;";
$q2=$koneksi->query($sql2);
 if ($q2) {
     echo "Tabel Pasien Sudah Dibuat !";
 } else {
     echo "Tabel Pasien Gagal Dibuat !";
 }
?>