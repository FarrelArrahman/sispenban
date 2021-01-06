<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['edit-status-penerima'])) {
    unset($_POST['edit-status-penerima']);

    $alternatif = $_POST;

    foreach($alternatif as $id => $status) {
        $data = [
            'IdAlternatif' => $id,
            'StatusPenerima' => $status,
        ];

        $sistem->edit_status_penerima($data);
    }
    
    echo "<script>alert('Status penerima berhasil disimpan');window.location = '../pages-admin.php'</script>";
}
?>