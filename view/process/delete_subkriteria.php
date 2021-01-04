<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_GET['id'])) {
	$data = $_GET['id'];
	$sistem->delete_subkriteria($data);   
	echo "<script>alert('Data sub kriteria berhasil dihapus');window.location = '../pages-subkriteria.php'</script>";
}
?>