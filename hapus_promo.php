<?php 

include('koneksi.php');

$id_promo = $_GET['id_promo'];

$hapuss= mysqli_query($koneksi, "DELETE FROM promo WHERE id_promo='$id_promo'");

if($hapuss)
	header('location: daftar_promosi.php');
else
	echo "Hapus data gagal";

 ?>