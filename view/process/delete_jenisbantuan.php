<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_GET['id'])) {
	$data = $_GET['id'];
	$sistem->delete_jenisbantuan($data);   
	echo "<script>alert('Data jenis bantuan berhasil dihapus');window.location = '../pages-jenisbantuan.php'</script>";
}
?>