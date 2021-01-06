<?php
    include "process/sistem.php";
    $sistem = new sistem();

    $alternatif = $sistem->getNilaiFromDetailKriteriaByAlternatifInJenisBantuan('J001');
    $kriteria = $sistem->getKriteriaByJenisBantuan('J001');

    $topsis = $sistem->topsis($kriteria, $alternatif);

    echo '<pre>'.print_r($topsis, true).'</pre>';
    die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 100px;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <?php foreach($kriteria['data_kriteria'] as $k => $v): ?>
            <td><?php echo '[x'.++$k.']' ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach($topsis['matriks'] as $v): ?>
            <td><?php echo $v; ?></td>
            <?php endforeach; ?>
        </tr>
    </table>

    <br><br>

    <table border="1">
        <?php foreach($alternatif as $IdAlternatif => $alt): ?>
        <tr>
            <td><?php echo $alt['nama']; ?></td>
            <?php foreach($topsis['data_alternatif'] as $k => $v): ?>
            <?php if($k == $IdAlternatif): ?>
            <?php foreach($v as $IdDetailKriteria => $Nilai): ?>
            <td><?php echo $Nilai; ?></td>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>