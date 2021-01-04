<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_GET['id'])) {
	$data = $_GET['id'];
	$sistem->delete_detailkriteria($data);   
	echo "<script>alert('Data detail kriteria berhasil dihapus');window.location = '../pages-detailkriteria.php'</script>";
}
?>