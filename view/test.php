<?php
    include "process/sistem.php";
    $sistem = new sistem();

    $data = $sistem->getNilaiFromDetailKriteriaByAlternatifInJenisBantuan('J001');
    echo '<pre>'.print_r($data, true).'</pre>';
    die;
?>