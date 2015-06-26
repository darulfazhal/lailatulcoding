<?php
	if($id==null)
	{
		echo"<form action='". site_url('info/store')."' method='post'>";
	}
	else
	{	
		echo"<form action='". site_url('info/update')."' method='post'>";
	}
?>
	<input type="hidden" name="id" value="<?php echo$id ?>">
	<table>
		<tr>
			<td>Kota</td>			
			<td><input type="text" name="kota_id"  value="<?php echo$kota_id ?>"></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td><input type="text" name="tahun"  value="<?php echo$tahun ?>"></td>
		</tr>
		<tr>
			<td>User Total</td>
			<td><input type="text" name="user_total"  value="<?php echo$user_total ?>"></td>
		</tr>		
		<tr>
			<td></td>
			<td><input type="submit" value="Create"></td>
		</tr>
	</table>	
</form>