<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['add-detailkriteria'])) {
	$data = array(
				'IdJenisBantuan' => $_POST['IdJenisBantuan'],
				'IdKriteria' => $_POST['IdKriteria']
			);
	$sistem->tambah_detailkriteria($data);   
	echo "<script>alert('Data detail kriteria berhasil disimpan');window.location = '../pages-detailkriteria.php'</script>";
}
?>