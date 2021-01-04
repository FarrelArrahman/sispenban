<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['edit-alternatif'])) {
    $data = array(
                'IdAlternatif' => $_POST['IdAlternatif'],
                'NIK' => $_POST['NIK'],
                'NoKK' => $_POST['NoKK'],
                'Nama' => $_POST['Nama'],
                'IdJenisBantuan' => $_POST['IdJenisBantuan']
                );
    $sistem->edit_alternatif($data);   
    echo "<script>alert('Data alternatif berhasil disimpan');window.location = '../pages-admin.php'</script>";
}
?>