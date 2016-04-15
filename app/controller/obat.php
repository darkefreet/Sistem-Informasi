<?php

	include "controller/config.php";
	$conn = connect_database(); 

	function read(){
		global $conn;
		$sql = "SELECT * FROM `obat` ORDER BY `nama_obat`";
		$results = mysqli_query($conn,$sql);
		$rows = array();
		while($r = mysqli_fetch_assoc($results)){
			$rows[]=$r;
		}
		return json_encode($rows);
	}

	function readObat($id){
		global $conn;

		$obat = "SELECT * FROM `obat` WHERE id_obat=$id";
		$rq = mysqli_query($conn, $obat);

		$row = mysqli_fetch_array($rq, MYSQLI_ASSOC);
		return $row;
	}

	function postObat($data)
	{
		global $conn;

		if ($data['id'] == '')
		{
			//create new permohonan
			$obat = "INSERT INTO obat (nama_obat,harga_obat,deskripsi)
				VALUES ('$data[nama]', '$data[harga]', '$data[deskripsi]')";
		} 
		else 
		{
			//update permohonan
			$obat = "UPDATE obat
				SET
					nama_obat='$data[nama]',
					harga_obat='$data[harga]',
					deskripsi='$data[deskripsi]'
				WHERE
					id_obat = $data[id]";
		}      

		$q = mysqli_query($conn, $obat);
		return $q;
	}


?>