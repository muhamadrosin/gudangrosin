<?php
//koneksi engine database mySql
include "koneksi.php";
	   $tanggal=date("Y-m-d");
	//fungsi kode otomatis
		function kdauto($tabel, $inisial){
		$struktur   = mysql_query("SELECT * FROM $tabel");
		$field            = mysql_field_name($struktur,0);
		$panjang    = mysql_field_len($struktur,0);
		$qry  = mysql_query("SELECT max(".$field.") FROM ".$tabel);
		$row  = mysql_fetch_array($qry);
		if ($row[0]=="") {
		$angka=0;
		}
		else {
		$angka= substr($row[0], strlen($inisial));
		}
		$angka++;
		$angka      =strval($angka);
		$tmp  ="";
		for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";
		}
		return $inisial.$tmp.$angka;
		}

	?>
<head>
	<link rel="stylesheet" href="style.css" media="screen">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
	<link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" /> 
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.datepicker.js"></script>


<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tgl_sj").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
	  
    </script>
</head>
		<form action="input-sj.php" method="POST" name="form-create-sj" enctype="multipart/form-data">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td width="5%">&nbsp;</td>
					<td width="25%">&nbsp;</td>
					<td width="70%">&nbsp;</td>
				</tr>
				<tr>
					<td height="36">&nbsp;</td>
					<td>&nbsp;</td>
					<td><font size="4"><b>INPUT BARANG MASUK</b></font></td>
				</tr>
				<tr>
					<td width="5%" height="36">&nbsp;</td>
					<td width="25%">&nbsp;</td>
					<td width="70%">&nbsp;</td>
				</tr>
				<tr>
				<td height="36">&nbsp;</td>
				<td nowrap="nowrap" align="right"><div align="left">tanggal </div></td>
				<td><input required type="text" name="tgl_sj" value="" size="10" class="span9" id="tgl_sj" /></td>
			</tr>
      <tr>
				<td height="36">&nbsp;</td>
				<td>Status Kode</td>
				<td><?php
					$Open or die("Koneksi gagal");
					$Koneksi or die("Database tidak bisa dibuka");
					$result = mysql_query("SELECT * FROM barang");
					$jsArray = "var produk = new Array();\n";
					echo '<input name="status_code" onchange="changeValue(this.value)">';
					while ($row = mysql_fetch_array($result)) {
						$jsArray .= "produk['" . $row['status_code'] . "'] = {produk:'" . addslashes($row['produk']) . "'};\n";
					}
					echo '';
					?>
					<script type="text/javascript">
						<?php echo $jsArray; ?>
						function changeValue(id){
						document.getElementById('produk').value = produk[id].produk;
						};
					</script>
				</td>
			</tr>
   <tr>
				<td height="36">&nbsp;</td>
				<td>Produk</td>
				<td><input type="text" name="produk" readonly value id="produk" size="30" /></td>
			</tr>
				<tr>
					<td height="36">&nbsp;</td>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah" size="5"></td>
				</tr>
				<tr>
					<td height="36">&nbsp;</td>
					<td>Id Lokasi</td>
					<td><input type="text" name="id" size="20"></td>
				</tr>
				<tr>
					<td height="36">&nbsp;</td>
					<td>Lokasi</td>
					<td><input type="text" name="lokasi" size="20"></td>
				</tr>
				<tr>
					<td height="72">&nbsp;</td>
					<td>&nbsp;</td>

					<td><input type="submit" name="submit" value="Tambah Input Barang Masuk">&nbsp;&nbsp;&nbsp;
						<input type="reset" name="reset" value="Reset"></td>
				</tr>
    <tr>
					<td height="36">&nbsp;</td>
     <td height="36">&nbsp;</td>
					<td><a href='aksi_selesai.php'><h3>SELESAI</h3></a></td>

				</tr>
				<tr>
					<td width="5%">&nbsp;</td>
					<td width="25%">&nbsp;</td>
					<td width="70%">&nbsp;</td>
				</tr>
			</table>
		</form>
