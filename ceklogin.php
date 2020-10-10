<?php


if (isset($_POST['tombolsubmit'])){
    $namadepan = $_POST['namadepan'];
    $namabelakang = $_POST['namabelakang'];
    $username = $_POST['username'];
    $email = $_POST['email'];



    echo $username;
    echo "<br>" .$email;
    echo "<br> ".$namadepan." ".$namabelakang;
}


?>