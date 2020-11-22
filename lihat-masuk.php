<html>
<table>
	<br /><p align="center"><b>Log Aktivitas Barang Masuk</b></p><br>
	<table width="100%" border="1" align="center" cellpadding="1" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="5%"height="42">No</td>&nbsp;
		<th width="15%">Tanggal</td>&nbsp;
		<th width="15%">Status Code</td>&nbsp;   
		<th width="10%">Jumlah</td>&nbsp;
		<th width="15%">Produk</td>&nbsp;
		<th width="10%">Id Lokasi</td>&nbsp;
		<th width="10%">Lokasi</td>&nbsp; 
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM barang_masuk ORDER BY tgl_sj ASC";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$tgl_sj = stripslashes ($hasil['tgl_sj']);
				$status_code = stripslashes ($hasil['status_code']);
				$jumlah = stripslashes ($hasil['jumlah']);
				$produk= stripslashes ($hasil['produk']);
				$id = stripslashes ($hasil['id']);
				$lokasi = stripslashes ($hasil['lokasi']);
			{
		$nomer++;
	?>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr align="center">
			<td><?=$nomer?><div align="center"></div></td>
			<td><?=$tgl_sj?><div align="center"></div></td>
			<td><?=$status_code?><div align="center"></div></td>
			<td><?=$jumlah?><div align="center"></div></td>
			<td><?=$produk?><div align="center"></div></td>
			<td><?=$id?><div align="center"></div></td>
			<td><?=$lokasi?><div align="center"></div></td>
			</td>
		</tr>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td> 
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
</table>
</html>
