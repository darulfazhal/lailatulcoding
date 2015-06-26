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
			<td><input type="text" name="kota"  value="<?php echo$kota ?>"></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<!-- <td><input type="text" name="tahun"  value="<?php echo$tahun ?>"></td> -->
			<td>
				<select name="tahun">
					<?php
					for($i=2015;$i<=Date('Y');$i++)
					{
						if($i==Date('Y'))
						{
							echo" <option value='".$i."' selected>".$i."</option> ";
						}
						else
						{
							echo" <option value='".$i."'>".$i."</option> ";
						}
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Developher Total</td>
			<td><input type="number" name="dev_total"  value="<?php echo$dev_total ?>"></td>
		</tr>		
		<tr>
			<td>Designer Total</td>
			<td><input type="number" name="des_total"  value="<?php echo$des_total ?>"></td>
		</tr>		
		<tr>
			<td>Nilai Total Proyek</td>
			<td><input type="number" name="pro_total"  value="<?php echo$pro_total ?>"></td>
		</tr>		
		<tr>
			<td>Nilai Total Donasi</td>
			<td><input type="number" name="don_total"  value="<?php echo$don_total ?>"></td>
		</tr>		
		<tr>
			<td></td>
			<td><input type="submit" value="Create"></td>
		</tr>
	</table>	
</form>