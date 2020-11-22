<html>
<head>
	<link rel="stylesheet" href="style.css" media="screen">
</head>
<div class="content">
	<form action="input-data-sparepart.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="5%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>&nbsp;</td>
				<td><font size="4"><b>INPUT DATA BARANG</b></font></td>
			</tr>
			<tr>
				<td width="5%" height="36">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Status_Code</td>
				<td><input type="text" name="status_code" size="15" maxlength="7" style="text-transform:uppercase;"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Id</td>
				<td><input type="text" name="id" size="25"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Produk</td>
				<td><input type="text" name="produk" size="25"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>Stock </td>
				<td><input type="text" name="stok" size="7"></td>
			</tr>
			<tr>
				<td height="36">&nbsp;</td>
				<td>lokasi</td>
				<td><input type="text" name="lokasi" size="7"></td>
			</tr>

			<tr>
				<td height="72">&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Simpan">&nbsp;&nbsp;&nbsp;
					<input type="reset" name="reset" value="Hapus"></td>
			</tr>
			<tr>
				<td width="5%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="70%">&nbsp;</td>
			</tr>
		</table>
	</form>
</div>
</html>
