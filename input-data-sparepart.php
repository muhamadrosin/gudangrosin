<html>
<body bgcolor="#EEF2F7">
<?php
//Kirimkan Variabel
	$status_code	= $_POST['status_code'];
	$id	= $_POST['id'];
	$produk	= $_POST['produk'];
	$stok	= $_POST['stok'];
	$lokasi	= $_POST['lokasi'];

	//buka koneksi ke engine MySQL
 include "koneksi.php";
	//koneksi ke database
	$Koneksi = mysql_select_db("gudang_muhamadrosin");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
		else{
		print ("Database Connected<br><br>");
		}
	//cek code sparepart di database
	$cek=mysql_num_rows (mysql_query("SELECT status_code FROM barang WHERE status_code='$_POST[status_code]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('CODE sudah dipakai !, silahkan diulang kembali');
			document.location='home.php?page=lihat-stock2';
			</script>
	<?php
	}
 if(!empty($status_code)){

	$input	="INSERT INTO barang (status_code, id, produk, stok,lokasi)
			VALUES ('$status_code','$id','$produk','$stok','$lokasi')";
    }
    else {
	?>
			<script language="JavaScript">
			alert('CODE harus diisi !, silahkan diulang kembali');
   document.location='home.php?page=form-input-data-sparepart';

			</script>
	<?php
	}
	$query_input =mysql_query($input);
	
		if ($query_input) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Barang Berhasil diinput');
  document.location='home.php?page=lihat-stock2';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Data Barang Gagal diinput, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>
</html>
