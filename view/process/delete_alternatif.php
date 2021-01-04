<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_GET['id'])) {
	$data = $_GET['id'];
	$sistem->delete_alternatif($data);   
	echo "<script>alert('Data alternatif berhasil dihapus');window.location = '../pages-admin.php'</script>";
}
?>