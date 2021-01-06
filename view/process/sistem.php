<?php
include "koneksi.php";
class sistem extends database {
	function __construct($umum = false) {
		parent::__construct();
        session_start();
		if ($umum == false && $_SESSION['login']=="") {
			echo "<script>alert('Silahkan login terlebih dahulu');window.location = 'pages-login.php'</script>";
		}
	}
    
	// Tambah data jenis bantuan
	function tambah_jenisbantuan($data) {
		$qry = mysqli_query($this->conn, "insert into datajenisbantuan (IdJenisBantuan, NamaJenisBantuan) values ('".$this->getIdJenisBantuan()."','".$data['NamaJenisBantuan']."')") or die(mysqli_error($this->conn));
		return $qry;
	}

	// Tampil data jenis bantuan
	function tampil_jenisbantuan() {
		$qry = mysqli_query($this->conn,"select * from datajenisbantuan");
		$found = mysqli_num_rows($qry);
        if ($found == 0) {
            return false;
        } else {
            while($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
            return $data;    
        }
	}

	// Edit data jenis bantuan
	function edit_jenisbantuan($data) {
		$qry = mysqli_query($this->conn, "update datajenisbantuan set NamaJenisBantuan = '".$data['NamaJenisBantuan']."' where IdJenisBantuan = '".$data['IdJenisBantuan']."'") or die(mysqli_error($this->conn));
		return $qry;
	}
    
    // Hapus data jenis bantuan
	function delete_jenisbantuan($data) {
		$qry = mysqli_query($this->conn,"delete from datajenisbantuan where IdJenisBantuan = '$data'") or die(mysqli_error($this->conn));
		return $qry;
	}

    // Tambah data kriteria
	function tambah_kriteria($data) {
		$qry = mysqli_query($this->conn, "insert into datakriteria (IdKriteria, NamaKriteria, BobotKriteria, JenisKriteria) values ('".$this->getIdKriteria()."', '".$data['NamaKriteria']."','".$data['BobotKriteria']."','".$data['JenisKriteria']."')") or die(mysqli_error($this->conn));
		return $qry;
	}
    
	// Tampil data kriteria
	function tampil_kriteria() {
		$qry = mysqli_query($this->conn,"select * from datakriteria");
		$found = mysqli_num_rows($qry);
        if ($found == 0) {
            return false;
        } else {
            while($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
            return $data;    
        }
	}
    
    // Edit data kriteria
	function edit_kriteria($data) {
		$qry = mysqli_query($this->conn, "update datakriteria set NamaKriteria = '".$data['NamaKriteria']."', BobotKriteria = '".$data['BobotKriteria']."', JenisKriteria = '".$data['JenisKriteria']."' where IdKriteria = '".$data['IdKriteria']."'") or die(mysqli_error($this->conn));
		return $qry;
	}
    
    // Hapus data kriteria
	function delete_kriteria($data) {
		$qry = mysqli_query($this->conn,"delete from datakriteria where IdKriteria = '$data'") or die(mysqli_error($this->conn));
		return $qry;
	}

	// Tambah data detail kriteria
	function tambah_detailkriteria($data) {
		$qry = mysqli_query($this->conn, "insert into datadetailkriteria (IdDetailKriteria, IdJenisBantuan, IdKriteria) values ('".$this->getIdDetailKriteria()."', '".$data['IdJenisBantuan']."', '".$data['IdKriteria']."')") or die(mysqli_error($this->conn));
		return $qry;
	}

    // Tampil data detail kriteria
	function tampil_detailkriteria() {
		$qry = mysqli_query($this->conn,"select * from datadetailkriteria order by IdDetailKriteria ASC");
		$found = mysqli_num_rows($qry);
        if ($found == 0) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
            return $data;    
        }
	}
    
    // Edit data detail kriteria
	function edit_detailkriteria($data) {
		$qry = mysqli_query($this->conn, "update datadetailkriteria set IdJenisBantuan = '".$data['IdJenisBantuan']."', IdKriteria = '".$data['IdKriteria']."' where IdDetailKriteria = '".$data['IdDetailKriteria']."'") or die(mysqli_error($this->conn));
		return $qry;
	}
    
    // Hapus data detail kriteria
	function delete_detailkriteria($data) {
		$qry = mysqli_query($this->conn,"delete from datadetailkriteria where IdDetailKriteria = '$data'") or die(mysqli_error($this->conn));
		return $qry;
	}

	// Tambah data sub kriteria
	function tambah_subkriteria($data) {
		$qry = mysqli_query($this->conn, "insert into datasubkriteria (IdSubKriteria, IdKriteria, NamaSubKriteria, BobotSubKriteria) values ('".$this->getIdSubKriteria()."', '".$data['IdDetailKriteria']."', '".$data['NamaSubKriteria']."','".$data['BobotSubKriteria']."')") or die(mysqli_error($this->conn));
		return $qry;
	}
    
    // Tampil data sub kriteria
	function tampil_subkriteria() {
		$qry = mysqli_query($this->conn,"select * from datasubkriteria");
		$found = mysqli_num_rows($qry);
        if ($found == 0) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
            return $data;    
        }
	}
    
    // Edit data sub kriteria
	function edit_subkriteria($data) {
		$qry = mysqli_query($this->conn, "update datasubkriteria set IdKriteria = '".$data['IdKriteria']."', NamaSubKriteria = '".$data['NamaSubKriteria']."', BobotSubKriteria = '".$data['BobotSubKriteria']."' where IdSubKriteria = '".$data['IdSubKriteria']."'") or die(mysqli_error($this->conn));
		return $qry;
	}
    
    // Hapus data sub kriteria
	function delete_subkriteria($data) {
		$qry = mysqli_query($this->conn,"delete from datasubkriteria where IdSubKriteria = '$data'") or die(mysqli_error($this->conn));
		return $qry;
	}
 
	// Tambah data alternatif
	function tambah_alternatif($data) {
		$qry = mysqli_query($this->conn, "insert into dataalternatif (IdAlternatif, NIK, NoKK, Nama, IdJenisBantuan) values ('".$this->getIdAlternatif()."','".$data['NIK']."','".$data['NoKK']."','".$data['Nama']."','".$data['IdJenisBantuan']."')") or die(mysqli_error($this->conn));
		return $qry;
	}

	// Tampil data alternatif
	function tampil_alternatif() {
		$qry = mysqli_query($this->conn,"select * from dataalternatif");
		$found = mysqli_num_rows($qry);
        if ($found == 0) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
            return $data;    
        }
	}

	// Edit data alternatif
	function edit_alternatif($data) {
		$qry = mysqli_query($this->conn, "update dataalternatif set NIK = '".$data['NIK']."', NoKK = '".$data['NoKK']."', Nama = '".$data['Nama']."', IdJenisBantuan = '".$data['IdJenisBantuan']."' where IdAlternatif = '".$data['IdAlternatif']."'") or die(mysqli_error($this->conn));
		return $qry;
	}
    
    // Hapus data alternatif
	function delete_alternatif($data) {
		$qry = mysqli_query($this->conn,"delete from dataalternatif where IdAlternatif = '$data'") or die(mysqli_error($this->conn));
		return $qry;
	}

    // Tambah data analisa
	function tambah_analisa($data) {
		$qry = mysqli_query($this->conn, "insert into dataanalisa (IdAnalisa, IdAlternatif, StatusPenerima) values ('".$data['IdAnalisa']."','".$data['IdAlternatif']."','".$data['StatusPenerima']."')") or die(mysqli_error($this->conn));
		return $data['IdAnalisa'];
	}

	// Tambah data detail analisa
	function tambah_detailanalisa($data) {
		$qry = mysqli_query($this->conn, "insert into datadetailanalisa (IdDetailAnalisa, IdAnalisa, IdDetailKriteria, Nilai) values ('".$this->getIdDetailAnalisa()."','".$data['IdAnalisa']."','".$data['IdDetailKriteria']."', '".$data['Nilai']."')") or die(mysqli_error($this->conn));
		return $qry;
	}
    
	//Untuk nyatuin antara id analisa dan id detail analisa
	function store_analisa($data){
		$storeAnalisa = mysqli_insert_id($this->conn, $IdAnalisa, $IdDetailAnalisa);
		return $qry;
	}

    // Tampil data analisa 
	function tampil_analisa() {
		$qry = mysqli_query($this->conn,"select * from dataanalisa");
		$found = mysqli_num_rows($qry);
        if ($found == 0) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
            return $data;    
        }
	}
    
    // Edit data analisa 
	function edit_analisa($data) {
		$qry = mysqli_query($this->conn, "update dataanalisa set IdAnalisa = '".$data['IdAnalisa']."', IdAlternatif = '".$data['IdAlternatif']."', StatusPenerima = '".$data['StatusPenerima']."' where IdAnalisa = '".$data['IdAnalisa']."'") or die(mysqli_error($this->conn));
		return $qry;
	}
    
    // Hapus data analisa
	function delete_analisa($data) {
		$qry = mysqli_query($this->conn,"delete from dataanalisa where IdAnalisa = '$data'") or die(mysqli_error($this->conn));
		return $qry;
	}

	// Tambah data nilai alternatif
	function tambah_nilaialternatif($data) {
		$qry = mysqli_query($this->conn, "insert into dataanalisa (IdDetailKriteria, IdJenisBantuan, IdKriteria) values ('".$this->getIdDetailKriteria()."', '".$data['IdJenisBantuan']."', '".$data['IdKriteria']."')") or die(mysqli_error($this->conn));
		return $qry;
	}

	// Tampil data detail analisa
	function tampil_detailanalisa() {
		$qry = mysqli_query($this->conn,"select * from datadetailanalisa");
		$found = mysqli_num_rows($qry);
        if ($found == 0) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
            return $data;    
        }
	}

	// Cari data alternatif  dengan NIK
    function cari_nik ($datanik){
        $datanik = $datanik.'%';
        $qry = mysqli_query($this->conn, "select * from dataalternatif where NIK like '$datanik'");
        $found = mysqli_num_rows($qry);
        if ($found == 0) {
            return false;
        } else {
            while($x = mysqli_fetch_assoc($qry)) {
                $data[] = $x;
            }
            return $data;    
        }
    }

	// IdJenisBantuan Generator
	function getIdJenisBantuan() {
		$IdJenisBantuan = "J";
		$jum_jenisbantuan = count($this->tampil_jenisbantuan() ?? []);
		$jum_jenisbantuan++;

		if(strlen($jum_jenisbantuan) == 3) $IdJenisBantuan .= $jum_jenisbantuan;
		else if(strlen($jum_jenisbantuan) == 2) $IdJenisBantuan .= "0" . $jum_jenisbantuan;
		else if(strlen($jum_jenisbantuan) == 1) $IdJenisBantuan .= "00" . $jum_jenisbantuan;
		
		return $IdJenisBantuan;
	} 


	// IdKriteria Generator
	function getIdKriteria() {
		$IdKriteria = "K";
		$jum_kriteria = count($this->tampil_kriteria() ?? []);
		$jum_kriteria++;

		if(strlen($jum_kriteria) == 3) $IdKriteria .= $jum_kriteria;
		else if(strlen($jum_kriteria) == 2) $IdKriteria .= "0" . $jum_kriteria;
		else if(strlen($jum_kriteria) == 1) $IdKriteria .= "00" . $jum_kriteria;
		
		return $IdKriteria;
	} 

	// IdDetailKriteria Generator
	function getIdDetailKriteria() {
		$IdDetailKriteria = "DK";
		$jum_detailkriteria = count($this->tampil_detailkriteria() ?? []);
		$jum_detailkriteria++;

		if(strlen($jum_detailkriteria) == 3) $IdDetailKriteria .= $jum_detailkriteria;
		else if(strlen($jum_detailkriteria) == 2) $IdDetailKriteria .= "0" . $jum_detailkriteria;
		else if(strlen($jum_detailkriteria) == 1) $IdDetailKriteria .= "00" . $jum_detailkriteria;
		
		return $IdDetailKriteria;
	} 

	// IdSubKriteria Generator
	function getIdSubKriteria() {
		$IdSubKriteria = "SK";
		$jum_subkriteria = count($this->tampil_subkriteria() ?? []);
		$jum_subkriteria++;

		if(strlen($jum_subkriteria) == 3) $IdSubKriteria .= $jum_subkriteria;
		else if(strlen($jum_subkriteria) == 2) $IdSubKriteria .= "0" . $jum_subkriteria;
		else if(strlen($jum_subkriteria) == 1) $IdSubKriteria .= "00" . $jum_subkriteria;
		
		return $IdSubKriteria;
	}

	// IdAlternatif Generator
	function getIdAlternatif() {
		$IdAlternatif = "A";
		$jum_alternatif = count($this->tampil_alternatif() ?? []);
		$jum_alternatif++;

		if(strlen($jum_alternatif) == 3) $IdAlternatif .= $jum_alternatif;
		else if(strlen($jum_alternatif) == 2) $IdAlternatif .= "0" . $jum_alternatif;
		else if(strlen($jum_alternatif) == 1) $IdAlternatif .= "00" . $jum_alternatif;
		
		return $IdAlternatif;
	}

	// IdAnalisa Generator
	function getIdAnalisa() {
		$IdAnalisa = "AN";
		$jum_analisa = count($this->tampil_analisa() ?? []);
		$jum_analisa++;

		if(strlen($jum_analisa) == 3) $IdAnalisa .= $jum_analisa;
		else if(strlen($jum_analisa) == 2) $IdAnalisa .= "0" . $jum_analisa;
		else if(strlen($jum_analisa) == 1) $IdAnalisa .= "00" . $jum_analisa;
		
		return $IdAnalisa;
	}

	// IdAnalisa Generator
	function getIdDetailAnalisa() {
		$IdDetailAnalisa = "DA";
		$jum_detailanalisa = count($this->tampil_detailanalisa() ?? []);
		$jum_detailanalisa++;

		if(strlen($jum_detailanalisa) == 3) $IdDetailAnalisa .= $jum_detailanalisa;
		else if(strlen($jum_detailanalisa) == 2) $IdDetailAnalisa .= "0" . $jum_detailanalisa;
		else if(strlen($jum_detailanalisa) == 1) $IdDetailAnalisa .= "00" . $jum_detailanalisa;
		
		return $IdDetailAnalisa;
	}

	// Select kriteria berdasarkan jenis bantuan
	function getKriteriaByJenisBantuan($id) {
		$data_kriteria = [];

		$query_kriteria = mysqli_query($this->conn, "SELECT * from datadetailkriteria WHERE IdJenisBantuan = '$id'");

        if (!$query_kriteria) {
            return false;
        } else {
            while($x = mysqli_fetch_assoc($query_kriteria)) {
                $data_kriteria[] = $x;
            }

            if(count($data_kriteria) < 1){
				$data_subkriteria = [];
            } else {
				foreach($data_kriteria as $kriteria) {
					$data_subkriteria[$kriteria['IdDetailKriteria']] = $this->getSubKriteriaByKriteria($kriteria['IdKriteria']);
				}
            }
        }
        return ['data_kriteria' => $data_kriteria, 'data_subkriteria' => $data_subkriteria];
	}

	// Select subkriteria berdasarkan kriteria
	function getSubKriteriaByKriteria($id) {
		$data_subkriteria = [];
		$query_subkriteria = mysqli_query($this->conn, "SELECT * from datasubkriteria WHERE IdKriteria = '$id'");

		if (!$query_subkriteria) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($query_subkriteria)) {
                $data_subkriteria[] = $x;
            }
        }

        return $data_subkriteria;
	}

	function getAlternatifByJenisBantuan($id) {
		$data_alternatif = [];

		$query_alternatif = mysqli_query($this->conn, "SELECT * from dataalternatif WHERE IdJenisBantuan = '$id'");

        if (!$query_alternatif) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($query_alternatif)) {
                $data_alternatif[] = $x;
            }
        }
        return $data_alternatif;
	}

	function getNamaAlternatifByAlternatif($id) {
		$data_alternatif = "";

		$query_alternatif = mysqli_query($this->conn, "SELECT Nama from dataalternatif WHERE IdAlternatif = '$id'");

        if (!$query_alternatif) {
            return "";
        } else {
            $data_alternatif = mysqli_fetch_assoc($query_alternatif);
        }
        return $data_alternatif['Nama'];
	}

	function getDetailAnalisaByAnalisa($id) {
		$data_detailanalisa = [];

		$query_detailanalisa = mysqli_query($this->conn, "SELECT * from datadetailanalisa WHERE IdAnalisa = '$id'");

        if (!$query_detailanalisa) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($query_detailanalisa)) {
                $data_detailanalisa[] = $x;
            }
        }
        return $data_detailanalisa;
	}

	function getAnalisaByAlternatif($id) {
		$data_analisa = [];

		$query_analisa = mysqli_query($this->conn, "SELECT * from dataanalisa WHERE IdAlternatif = '$id'");

        if (!$query_analisa) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($query_analisa)) {
                $data_analisa[] = $x;
			}
			
			if(count($data_analisa) < 1){
				$data_detailkriteria = [];
            } else {
				foreach($data_analisa as $analisa) {
					$data_detailkriteria[$analisa] = $this->getDetailAnalisaByAnalisa($analisa);
				}
            }
        }
        return $data_analisa;
	}

	// ambil nilai alternatif berdasarkan jenis bantuan dan alternatif
	function getNilai($IdJenisBantuan, $IdAlternatif) {
		$data_analisa = "";
		$data_nilai = [];

		$query_analisa = mysqli_query($this->conn, "SELECT * from dataanalisa WHERE IdAlternatif = '$IdAlternatif' LIMIT 1");

		if (!$query_analisa) {
            return [];
        } else {
			$data_analisa = mysqli_fetch_assoc($query_analisa);
			
			$query_nilai = mysqli_query($this->conn, "SELECT * from datadetailanalisa WHERE IdAnalisa = '".$data_analisa['IdAnalisa']."'");
			
			if (!$query_nilai) {
				return [];
			} else {
				while($x = mysqli_fetch_assoc($query_nilai)) {
					$data_nilai[] = $x;
				}
			}
        }

        return $data_nilai;
	}

	// ambil nilai alternatif 
	function getNilaiFromDetailKriteriaByAlternatifInJenisBantuan($id) {
		$data_alternatif = [];

		$query_alternatif = mysqli_query($this->conn, "SELECT * from dataalternatif WHERE IdJenisBantuan = '$id'");

        if (!$query_alternatif) {
            return [];
        } else {
            while($x = mysqli_fetch_assoc($query_alternatif)) {
                $data_alternatif[] = $x;
			}
			

            if(count($data_alternatif) < 1){
				$data_nilai = [];
            } else {
				foreach($data_alternatif as $alternatif) {
					$data_nilai[$alternatif['IdAlternatif']]['nama'] = $this->getNamaAlternatifByAlternatif($alternatif['IdAlternatif']);
					$data_nilai[$alternatif['IdAlternatif']]['nilai'] = $this->getNilai($id, $alternatif['IdAlternatif']);
				}
            }
        }
        return $data_nilai;
	}


	// Perhitungan Topsis
	function topsis($kriteria, $alternatif) {
		// hitung matriks keputusan ternormalisasi
		$matriks_keputusan_ternormalisasi = $this->matriks_keputusan_ternormalisasi($kriteria, $alternatif);

		$matriks_solusi = $this->matriks_solusi($matriks_keputusan_ternormalisasi);

		// return $matriks_keputusan_ternormalisasi;
		return [
			'matriks_keputusan_ternormalisasi' => $matriks_keputusan_ternormalisasi, 
			'matriks_solusi' => $matriks_solusi,
		];
	}

	function matriks_keputusan_ternormalisasi($kriteria, $alternatif) {
		$matriks = [];
		$arr_alternatif = [];
		
		foreach($kriteria['data_kriteria'] as $kr) {
			$matriks[$kr['IdDetailKriteria']] = 0;
			foreach($alternatif as $IdAlternatif => $alt) {
				foreach($alt['nilai'] as $k => $v) {
					if($v['IdDetailKriteria'] == $kr['IdDetailKriteria']) {
						$matriks[$kr['IdDetailKriteria']] += pow($v['Nilai'], 2);
					}
				}
			}
			$matriks[$kr['IdDetailKriteria']] = sqrt($matriks[$kr['IdDetailKriteria']]);
		}

		foreach($alternatif as $IdAlternatif => $alt) {
			foreach($alt['nilai'] as $key => $value) {
				$arr_alternatif[$IdAlternatif][$value['IdDetailKriteria']] = ($value['Nilai'] / $matriks[$value['IdDetailKriteria']]);
			}
		}

		return ['matriks' => $matriks, 'data_alternatif' => $arr_alternatif];
	}

	function matriks_solusi($matriks_keputusan_ternormalisasi) {
		$matriks_solusi_positif = [];
		$matriks_solusi_negatif = [];

		foreach($matriks_keputusan_ternormalisasi['matriks'] as $IdKriteria => $Nilai) {
			$matriks_solusi_positif[$IdKriteria] = 0;
			$matriks_solusi_negatif[$IdKriteria] = 1;

			foreach($matriks_keputusan_ternormalisasi['data_alternatif'] as $Alternatif) {
				foreach($Alternatif as $k => $v) {
					if($IdKriteria == $k) {
						if($matriks_solusi_positif[$IdKriteria] < $v) {
							$matriks_solusi_positif[$IdKriteria] = $v;
						}

						if($matriks_solusi_negatif[$IdKriteria] > $v) {
							$matriks_solusi_negatif[$IdKriteria] = $v;
						}
					}
				}
			}
		}

		return [
			'matriks_solusi_positif' => $matriks_solusi_positif,
			'matriks_solusi_negatif' => $matriks_solusi_negatif,
		];
	}

	// Status Penerima
	function edit_status_penerima($data) {
		$qry = mysqli_query($this->conn, "update dataanalisa set StatusPenerima = '".$data['StatusPenerima']."' where IdAlternatif = '".$data['IdAlternatif']."'") or die(mysqli_error($this->conn));
		return $qry;
	}
}
?>