<!DOCTYPE html>

<?php
    include "process/sistem.php";
    $jenis = (@$_GET['jenis_bantuan'] != "") ? $_GET['jenis_bantuan'] : false;
    $sistem = new sistem();

    if (isset($_SESSION)) {
        $login = $_SESSION['login'];
        $last_login = $_SESSION['last_login'];
        if ((time() - $last_login) > 60 * 60) {
            session_destroy();
			echo "<script>alert('Sesi anda telah habis, silahkan login kembali');window.location = 'pages-login.php'</script>";
        } else {
            $last_login = time();
        }
        if ($login != "Admin") {
            session_destroy();
			echo "<script>alert('Anda tidak memiliki hak akses, silahkan login kembali');window.location = 'pages-login.php'</script>";
        }
    }
?>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Sistem Penyerahan Bantuan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-tiny.png">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ml-4" href="pages-admin.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-tiny.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text3-tiny.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo icon -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- User profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/person.png" alt="user" class="profile-pic m-r-10">
                            <?php
                                echo $login;
                            ?>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-admin.php" aria-expanded="false"><i class="mdi mr-2 mdi-account-multiple"></i><span class="hide-menu">Data Alternatif</span></a></li>
                        <?php
                            if ($login == "Admin") {
                        ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-add-alternatif.php" aria-expanded="false"><i class="mdi mr-2 mdi-account-multiple-plus"></i><span class="hide-menu">Tambah Alternatif</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-jenisbantuan.php" aria-expanded="false"><i class="mdi mr-2 mdi-playlist-check"></i><span class="hide-menu">Jenis Bantuan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-kriteria.php" aria-expanded="false"><i class="mdi mr-2 mdi-playlist-check"></i><span class="hide-menu"> Kriteria</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-detailkriteria.php" aria-expanded="false"><i class="mdi mr-2 mdi-playlist-check"></i><span class="hide-menu">Detail Kriteria</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-subkriteria.php" aria-expanded="false"><i class="mdi mr-2 mdi-playlist-check"></i><span class="hide-menu">Sub Kriteria</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-nilaialternatif.php" aria-expanded="false"><i class="mdi mr-2 mdi-playlist-check"></i><span class="hide-menu">Nilai Alternatif</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-analisa.php" aria-expanded="false"><i class="mdi mr-2 mdi-chart-bar"></i><span class="hide-menu">Analisa</span></a></li>
                        <?php
                            }
                        ?>
                        
                        <?php
                            if ($login != "Admin") {
                        ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-analisa.php" aria-expanded="false"><i class="mdi mr-2 mdi-scale-balance"></i><span class="hide-menu">Analisa</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-keputusan.php" aria-expanded="false"><i class="mdi mr-2 mdi-star"></i><span class="hide-menu">Keputusan</span></a></li>
                        <?php
                            }
                        ?>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-12 link-wrap">
                        <!-- item-->
                        <a href="process/logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="mdi mr-2 mdi-logout"></i><span class="hide-menu">Logout</span></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Tambah Data Alternatif</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="pages-admin.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Nilai Alternatif</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Tambah Data Keluarga Miskin -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-info">Pilih Jenis Bantuan</h4>
                                <form action="" method="GET">
                                    <div class="input-group col-md-4">
                                    <select name="jenis_bantuan" class="form-control">
                                        <option value="" selected="" disabled="">Pilih Jenis Bantuan</option>
                                        <?php
                                        foreach ($sistem->tampil_jenisbantuan() as $jenis_bantuan):
                                        ?>
                                        <option <?php if($jenis == $jenis_bantuan['IdJenisBantuan']) echo 'selected' ?> value="<?= $jenis_bantuan['IdJenisBantuan']; ?>"><?= $jenis_bantuan['NamaJenisBantuan']?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Pilih</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php if(@$_GET['jenis_bantuan']){ 
                    $data = $sistem->getKriteriaByJenisBantuan($jenis);
                    $alternatif = $sistem->getAlternatifByJenisBantuan($jenis);
                    ?>
                    <?php if(count($alternatif) > 0){
                    ?>
                    <form action="process/add_nilaialternatif.php" method="POST">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr class="table-info">
                                                <th class="border-top-0 text-center">Alternatif</th>
                                                <?php foreach($data['data_subkriteria'] as $key => $value): ?>
                                                <th class="border-top-0 text-center"><?php echo $key; ?></th>
                                                <?php endforeach; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($alternatif as $alt): ?>
                                            <input type="hidden" name="alternatif[]" value="<?= $alt['IdAlternatif'] ?>">
                                            <tr class="user-table">
                                                <td><?php echo $alt['Nama'] ?></td>
                                                <?php foreach($data['data_subkriteria'] as $key => $value): ?>
                                                <td> 
                                                    <select class="form-control" name="<?php echo $key.'['.$alt['IdAlternatif'].']'; ?>">
                                                        <?php foreach($value as $sub_kriteria): ?>
                                                            <option value="<?php echo $sub_kriteria['BobotSubKriteria'] ?>"><?php echo $sub_kriteria['BobotSubKriteria'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <?php endforeach; ?>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    
                                    <div class="col-sm-12 d-flex">
                                            <a href="pages-admin.php" class="btn btn-danger text-white mr-2">Kembali</a>
                                            <input type="submit" class="btn btn-success mx-auto mx-md-0 text-white" value="Simpan" name="add-nilaialternatif">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <?php } else { ?>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body text-center">
                                Data Alternatif tidak tersedia.
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>
                <!-- ============================================================== -->
                <!-- Tambah Data Keluarga Miskin -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> © 2020 Sistem Penyerahan Bantuan</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
