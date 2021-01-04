<?php

include "sistem.php";
$sistem = new sistem();
                                  
if (isset($_POST['add-alternatif'])) {
    $data = array(
                'IdJenisBantuan' => $_POST['IdJenisBantuan'],
                'NIK' => $_POST['NIK'],
                'NoKK' => $_POST['NoKK'],
                'Nama' => $_POST['Nama']
            );
    $id_alternatif = $sistem->getIdAlternatif();
    $sistem->tambah_alternatif($data);   
    echo "<script>alert('Data alternatif berhasil disimpan');window.location = '../pages-nilaialternatif.php?id=".$id_alternatif."'</script>";
}

?>