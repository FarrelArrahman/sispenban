<?php

include "sistem.php";
$sistem = new sistem();

if (isset($_POST['add-nilaialternatif'])) {
	unset($_POST['add-nilaialternatif']);
	$alternatif = $_POST['alternatif'];
	unset($_POST['alternatif']);
	$nilai = $_POST;

	$data = [
		'alternatif' => $alternatif,
		'nilai' => $nilai
	];

	// echo '<pre>'.print_r($data, true).'</pre>';
	// die;

	foreach ($data['alternatif'] as $alternatif) {
		$IdAnalisa = $sistem->getIdAnalisa();

		$data_analisa = array(
			'IdAnalisa' => $IdAnalisa,
			'IdAlternatif' => $alternatif,
			'StatusPenerima' => ''
		);

		$IdAnalisaUntukDetail = $sistem->tambah_analisa($data_analisa);

		foreach ($data['nilai'] as $dk => $nilai) {
			foreach ($nilai as $k => $v) {
				if($alternatif == $k){
					$data_detailanalisa = array(
						'IdAnalisa' => $IdAnalisaUntukDetail,
						'IdDetailKriteria' => $dk,
						'Nilai' => $v
					);
		
					$sistem->tambah_detailanalisa($data_detailanalisa);
				}
			}
		}
	}

    echo "<script>alert('Data alternatif berhasil disimpan');window.location = '../pages-nilaialternatif.php?id=".$id_alternatif."'</script>";
}
?>