<h2>Infos</h2>
<a href='<?php echo site_url('info/create/'); ?>'>Create</a> 
<hr></hr>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Kota</th>
			<th>Tahun</th>
			<th>User Total</th>			
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php	
	foreach ($infos as $info) {
		echo"
		<tr>
			<th>".$info->id."</th>
			<th>".$info->kota_id."</th>
			<th>".$info->tahun."</th>
			<th>".$info->user_total."</th>			
			<th>
				<a href='".site_url('info/edit/'.$info->id)."'>Edit</a> | 
 				<form action='".site_url('info/delete')."' method='post'><input type='hidden' name='id' value='".$info->id."'><input type='submit' value='delete'></form>
			</th>
		</tr>
		";	
	}
	?>
	</tbody>
</table>
