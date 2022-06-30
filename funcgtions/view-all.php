<?php

	// Integrasi Koneksi
	require_once('./config/connection.php');

	// Membuat perintah sql
	$sql = "SELECT id, kategori, judul, harga FROM produk";

	$result = $connection->query($sql);

?>
