<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['add-subkriteria'])) {
	$data = array(
				'IdDetailKriteria' => $_POST['IdDetailKriteria'],
				'NamaSubKriteria' => $_POST['NamaSubKriteria'],
				'BobotSubKriteria' => $_POST['BobotSubKriteria']
			);
	$sistem->tambah_subkriteria($data);   
	echo "<script>alert('Data sub kriteria berhasil disimpan');window.location = '../pages-subkriteria.php'</script>";
}
?>