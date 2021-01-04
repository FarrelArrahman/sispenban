<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['edit-jenisbantuan'])) {
	$data = array(
				'IdJenisBantuan' => $_POST['IdJenisBantuan'],
				'NamaJenisBantuan' => $_POST['NamaJenisBantuan']);
	$sistem->edit_jenisbantuan($data);   
	echo "<script>alert('Data jenis bantuan berhasil disimpan');window.location = '../pages-jenisbantuan.php'</script>";
}

?>