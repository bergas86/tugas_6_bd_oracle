<?php

$user="bergas_054";
$pass="054";
$database="LOCALHOST/XE";

$con = oci_connect($user, $pass, $database);
if($con){    echo "Koneksi Sukses";  }
else{    $err = oci_error();    echo "Gagal Koneksi". $err['text'];   }

?>