<?php

	include "controller/config.php";
	$conn = connect_database();      


	function read($id){
		global $conn;
		$sql = "SELECT * FROM `pasien` NATURAL JOIN `pengobatan` WHERE id_pasien=$id";
		$results = mysqli_query($conn,$sql);
		$rows = array();
		while($r = mysqli_fetch_assoc($results)){
			$rows[]=$r;
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

	function postPasien($data)
	{
		global $conn;

		if ($data['IdPasien'] == '')
		{
			//create new permohonan
			$pasien = "INSERT INTO pasien (nama_pasien, jenis_kelamin, golongan_darah, alamat, no_telp)
				VALUES ('$data[NamaPasien]', '$data[JenisKelamin]', '$data[GolonganDarah]', '$data[Alamat]','$data[NoTelpon]')";
		} 
		else 
		{
			//update permohonan
			$pasien = "UPDATE pasien
				SET
					nama_pasien='$data[NamaPasien]',
					jenis_kelamin='$data[JenisKelamin]',
					golongan_darah='$data[GolonganDarah]',
					alamat='$data[Alamat]',
					no_telp='$data[NoTelpon]'
				WHERE
					id_pasien = $data[IdPasien]";
		}      

		$q = mysqli_query($conn, $pasien);
		return $q;
	}

?>