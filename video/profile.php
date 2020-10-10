<?php
    session_start();
    if(isset($_SESSION['nama_user']) ){
        echo 'ini halaman profil ' .$_COOKIE['nama_user'];
    }else{
        echo 'Silahkan Login Terlebih Dahulu';
    }
?>



<br>
<a href="logout.php">Logout</a>