<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_pnjl = $_POST['id_pnjl'];
  $nm_pnjl = $_POST['nm_pnjl'];
  $no_pnjl = $_POST['no_pnjl'];

	$query = "INSERT INTO penjual (id_pnjl,nm_pnjl,no_pnjl) VALUES ('".$id_pnjl."','".$nm_pnjl."','".$no_pnjl."')";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
	window.location.href='penjual.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
	window.location.href='penjual.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: penjual.php'); 
}