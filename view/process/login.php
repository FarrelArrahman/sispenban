<?php
include "koneksi.php";
class login extends database {
    function __construct() {
		parent::__construct();
    }
    
    function masuk($username, $password) {
        $qry = mysqli_query($this->conn, "select * from datalogin where Username = '$username' and Password = '$password'");
        $data = mysqli_fetch_array($qry);
        
        return $data;
    }
}

$xlogin = new login();
$username = $_POST['Username'];
$password = $_POST['Password'];

$data = $xlogin->masuk($username, $password);
if($data) {
    session_start();
    $_SESSION['login'] = $data['LevelUser'];
    $_SESSION['last_login'] = time();
    
    if ($_SESSION['login'] == 'Admin' or $_SESSION['login'] == 'Decision Maker') {
        echo "<script>alert('Login berhasil');window.location = '../pages-admin.php'</script>";
    } else if ($_SESSION['login'] == 'User') {
        echo "<script>alert('Login berhasil');window.location = '../index.php'</script>";
    }
} else {
    echo "<script>alert('Login gagal, akun tidak ditemukan');window.location = '../pages-login.php'</script>";
}
?>