<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_pmbl = $_POST['id_pmbl'];
  $no_pmbl = $_POST['no_pmbl'];
  $almt_pmbl = $_POST['almt_pmbl'];
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  pembeli  SET no_pmbl ='".$no_pmbl."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data pembeli berhasil diubah'); window.location.href='pembeli.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data pembeli gagal diubah'); window.location.href='pembeli.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pembeli.php'); 
}