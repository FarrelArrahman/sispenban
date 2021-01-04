<!DOCTYPE html>

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
    <div class="main-wrapper">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="error-box bg-info">
            <div class="error-body text-center">
                <!-- Column -->
                <div class="col-lg-3 col-xlg-3 col-md-5 mx-auto">
                    <!-- Column -->
                    <div class="card mt-5">
                        <div class="card-body little-profile text-center">
                            <div class="pro-img"><img src="../assets/images/logo-small.png" alt="user" style="width: auto; min-height: 200px"></div>
                            <h3 class="mb-0">LOGIN</h3>
                            <p>Sistem Penyerahan Bantuan</p>
                            <form class="form-horizontal form-material" name="login" method="POST" action="process/login.php">
                                <div class="form-group">
                                    <label class="col-md-12 mb-0 pt-3">Username</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control pl-0 form-control-line text-center" name="Username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control pl-0 form-control-line text-center" name="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 d-block text-center">
                                        <input type="submit" class="btn btn-success mx-auto mx-md-0 text-white px-5" value="LOGIN" name="login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center w-100">
                © 2020 Sistem Penyerahan Bantuan
            </footer>
        </div>

        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();

    </script>
</body>

</html>
