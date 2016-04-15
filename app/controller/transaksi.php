<?php

	include "controller/config.php";
	$conn = connect_database();   

	function read($id){
		global $conn;
		$sql = "SELECT * FROM `pengobatan` WHERE id_pasien=$id";
		$results = mysqli_query($conn,$sql);
		$rows = array();
		if($results){
			while($r = mysqli_fetch_assoc($results)){
				$rows[]=$r;
			}
		}
		return json_encode($rows);
	}

	function readPasien($id){
		global $conn;

		$pasien = "SELECT * FROM pasien WHERE id_pasien=$id";
		$rq = mysqli_query($conn, $pasien);

		$row = mysqli_fetch_array($rq, MYSQLI_ASSOC);
		return $row;
	}

	function getPasien() {
		global $conn;

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
	
	function saveTransaksi($id_pasien, $id_obat, $jumlah){
		// Create record di tabel pembelian_obat dulu
		$query = 'INSERT INTO pembelian_obat(id_pasien)
					VALUES ($id_pasien)';
		$pembelian_obat = mysqli_query($conn, $query);
		$id_pembelian = $pembelian_obat["id_pembelian"];

		// Untuk setiap obat, create item_pembelian
		$i=0;
		foreach ($id_obat as $id) {
			$query = 'INSERT INTO item_pembelian(id_pembelian, id_obat, jumlah)
					VALUES ($id_pembelian, $id, $jumlah[$i])';
			$i++;
			mysqli_query(conn, $query);
		}
		
	}

?>