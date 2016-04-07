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

	function readPasien($id){
		include "controller/config.php";
		$conn = connect_database();
		$pasien = "SELECT * FROM pasien WHERE id_pasien=$id";
		$rq = mysqli_query($conn, $pasien);

		$row = mysqli_fetch_array($rq, MYSQLI_ASSOC);
		return $row;
	}

	function getPasien() {
		include "controller/config.php";
		$conn = connect_database();
		if (isset($_GET["search"])){
            $search = $_GET["search"];
            $jenis = $_GET["jenis"];
            $sql = "SELECT * FROM `pasien` WHERE `$jenis` LIKE '%$search%'";
        } else {
            $sql = "SELECT * FROM pasien";
        }

        $result = $conn->query($sql);
        return $result;
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