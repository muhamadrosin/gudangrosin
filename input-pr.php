<html>
<body bgcolor="#EEF2F7">
<?php
	//buka koneksi ke engine MySQL
 include "koneksi.php";
	//Kirimkan Variabel
	$tgl_pr	= $_POST['tgl_pr'];
	$status_code	= $_POST['status_code'];
	$produk	= $_POST['produk'];
	$jumlah	= $_POST['jumlah'];
	$id	= $_POST['id'];
	$lokasi	= $_POST['lokasi'];
	
	//Masukan data ke Table PR
	$input	="INSERT INTO barang_keluar (tgl_pr, status_code, produk, jumlah, id, lokasi) VALUES ('$tgl_pr','$status_code','$produk','$jumlah','$id','$lokasi')";
	$query_input =mysql_query($input);
	//Update SOH di tabel sparepart
	$update="UPDATE barang SET stok=stok - $jumlah where status_code='$status_code'";
	$query_update =mysql_query($update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Input Barang Keluar Berhasil');
		document.location='home.php?page=form-create-pr';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Input Barang Keluar Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>
</html>
