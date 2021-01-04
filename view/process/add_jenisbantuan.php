<?php

include "sistem.php";
$sistem = new sistem();
                                  
if (isset($_POST['add-jenisbantuan'])) {
	$data = array(
				'NamaJenisBantuan' => $_POST['NamaJenisBantuan']);
	$sistem->tambah_jenisbantuan($data);   
	echo "<script>alert('Data jenis bantuan berhasil disimpan');window.location = '../pages-jenisbantuan.php'</script>";
}
?>