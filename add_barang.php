<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_brng = $_POST['id_brng'];
  $nm_brng = $_POST['nm_brng'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  

$query = "INSERT INTO barang (id_brng,nm_brng,harga,stok) VALUES ('".$id_brng."','".$nm_brng."','".$harga."','".$stok."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='barang.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='barang.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: barang.php'); 
}