<?php

	function create(){
		include "controller/config.php";
		$conn = connect_database();      
	}

	function read(){
		include "controller/config.php";
		$conn = connect_database();
		$sql = "SELECT * FROM `pengobatan`";
		$results = mysqli_query($conn,$sql);
		$rows = array();
		while($r = mysqli_fetch_assoc($results)){
			$rows[]=$r;
		}
		return json_encode($rows);
	}

	function readPasien($pasien){
		include "controller/config.php";
		$conn = connect_database();
		$sql = "SELECT * FROM `pengobatan` WHERE id_pasien = ".$pasien;
		$results = mysqli_query($conn,$sql);
		$rows = array();
		while($r = mysqli_fetch_assoc($results)){
			$rows[]=$r;
		}
		return json_encode($rows);
	}

	function update($array){
		include "controller/config.php";
		$conn = connect_database();

	}

	function delete($id_pasien, $id_rekam){
		include "controller/config.php";
		$conn = connect_database();

	}

?>