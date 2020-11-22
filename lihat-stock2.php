<html>
	<br /><p align="center"><b>Data Stock Barang</b></p><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#FFA600">
		<th width="10%"height="42">No</td>&nbsp;
		<th width="20%">Status_Code</td>&nbsp;
		<th width="20%">Id Lokasi</td>&nbsp;   
		<th width="20%">Produk</td>&nbsp; 
		<th width="20%">Stock</td>&nbsp; 
		<th width="20%">Lokasi</td>&nbsp;  
	</tr>
	<?php
  include "koneksi.php";
		$Cari="SELECT * FROM barang ORDER BY status_code";
		$Tampil = mysql_query($Cari);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$status_code = stripslashes ($hasil['status_code']);
				$id = stripslashes ($hasil['id']);
				$produk = stripslashes ($hasil['produk']);
				$stok = stripslashes ($hasil['stok']);
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
		</tr>
		<tr align="center">
			<td><?=$nomer?><div align="center"></div></td>
			<td><?=$status_code?><div align="center"></div></td>
			<td><?=$id?><div align="center"></div></td>
			<td><?=$produk?><div align="center"></div></td>
			<td><?=$stok?><div align="center"></div></td>
			<td><?=$lokasi?><div align="center"></div></td>
		</tr>
		<tr align="center" bgcolor="#DFE6EF">
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