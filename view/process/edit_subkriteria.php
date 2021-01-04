<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['edit-subkriteria'])) {
	$data = array(
				'IdSubKriteria' => $_POST['IdSubKriteria'],
				'IdKriteria' => $_POST['IdKriteria'],
				'NamaSubKriteria' => $_POST['NamaSubKriteria'],
				'BobotSubKriteria' => $_POST['BobotSubKriteria']
				);
	$sistem->edit_subkriteria($data);
	echo "<script>alert('Data sub kriteria berhasil disimpan');window.location = '../pages-subkriteria.php'</script>";
}
?>