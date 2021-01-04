<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['edit-kriteria'])) {
	$data = array(
				'IdKriteria' => $_POST['IdKriteria'],
				'NamaKriteria' => $_POST['NamaKriteria'],
				'BobotKriteria' => $_POST['BobotKriteria'],
				'JenisKriteria' => $_POST['JenisKriteria']);
	$sistem->edit_kriteria($data);   
	echo "<script>alert('Data kriteria berhasil disimpan');window.location = '../pages-kriteria.php'</script>";
}
?>