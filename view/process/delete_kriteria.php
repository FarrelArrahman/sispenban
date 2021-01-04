<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_GET['id'])) {
	$data = $_GET['id'];
	$sistem->delete_kriteria($data);   
	echo "<script>alert('Data kriteria berhasil dihapus');window.location = '../pages-kriteria.php'</script>";
}
?>