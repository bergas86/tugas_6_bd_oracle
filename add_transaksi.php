<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $kd_brng = $_POST['kd_brng'];
  $id_pnjl = $_POST['id_pnjl'];
  $kd_faktur = $_POST['kd_faktur'];
  $tgl_trnsks = $_POST['tgl_trnsks'];


$query = "INSERT INTO transaksi (kd_brng,id_pnjl,kd_faktur,tgl_trnsks) VALUES ('".$kd_brng."','".$id_pnjl."','".$kd_faktur."','".$tgl_trnsks."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='transaksi.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}