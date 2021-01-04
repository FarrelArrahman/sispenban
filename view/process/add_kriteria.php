<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['add-kriteria'])) {
	$data = array(
				'NamaKriteria' => $_POST['NamaKriteria'],
				'BobotKriteria' => $_POST['BobotKriteria'],
				'JenisKriteria' => $_POST['JenisKriteria'],
			);
	$sistem->tambah_kriteria($data);   
	echo "<script>alert('Data kriteria berhasil disimpan');window.location = '../pages-kriteria.php'</script>";
}
?>