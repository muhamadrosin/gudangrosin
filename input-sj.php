<html>
<body bgcolor="#EEF2F7">
<?php
	//buka koneksi ke engine MySQL
 include "koneksi.php";
	//Kirimkan Variabel
	$tgl_sj	= $_POST['tgl_sj'];
	$status_code	= $_POST['status_code'];
	$produk	= $_POST['produk'];
	$jumlah	= $_POST['jumlah'];
	$id	= $_POST['id'];
	$lokasi	= $_POST['lokasi'];
	
	//Masukan data ke Table SJ
	$input	="INSERT INTO barang_masuk (tgl_sj, status_code, produk, jumlah, id, lokasi) VALUES ('$tgl_sj','$status_code','$produk','$jumlah','$id','$lokasi')";
	$query_input =mysql_query($input);
	//Update SOH di tabel sparepart
	$update="UPDATE barang SET stok=stok + $jumlah where status_code='$status_code'";
	$query_update =mysql_query($update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Input Barang Masuk Berhasil');
		document.location='home.php?page=form-create-sj';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Create Barang Masuk Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>
</html>
