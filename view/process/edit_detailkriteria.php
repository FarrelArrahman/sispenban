<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['edit-detailkriteria'])) {
	$data = array(
				'IdDetailKriteria' => $_POST['IdDetailKriteria'],
				'IdJenisBantuan' => $_POST['IdJenisBantuan'],
				'IdKriteria' => $_POST['IdKriteria']);
	$sistem->edit_detailkriteria($data);   
	echo "<script>alert('Data detail riteria berhasil disimpan');window.location = '../pages-detailkriteria.php'</script>";
}
?>