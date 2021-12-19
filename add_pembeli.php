<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_pmbl = $_POST['id_pmbl'];
  $no_pmbl = $_POST['no_pmbl'];
  $almt_pmbl = $_POST['almt_pmbl'];

$query = "INSERT INTO pembeli (id_pmbl,no_pmbl,almt_pmbl) VALUES ('".$id_pmbl."','".$no_pmbl."','".$almt_pmbl."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='pembeli.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='pembeli.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pembeli.php'); 
}