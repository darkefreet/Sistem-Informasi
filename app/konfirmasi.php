<?php
	include "controller/transaksi.php";

	// echo $_POST['id_pasien'];
	saveTransaksi($_POST['id_pasien'], $_POST['id_obat'], $_POST['jumlah']);

?>