<h2>Report</h2>
<a href='<?php echo site_url('info/index/'); ?>'>Index</a> 
<a href='<?php echo site_url('info/create/'); ?>'>Create</a> 
<i> Created at <?php echo $created_at?> Updated at <?php echo$updated_at ?></i>
<hr>

<input type="hidden" name="id" value="<?php echo$id ?>">
<table>
	<tr>
		<td>Tahun</td>
		<!-- <td><input type="text" name="tahun"  value="<?php echo$tahun ?>"></td> -->
		<td>
			<select id="tahun" name="tahun">
				<?php
				for($i=2014;$i<=Date('Y');$i++)
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
		<td>Kota</td>			
		<td>
			<select id="kota" name="kota">
				<?php
				foreach ($cities as $city) {
					echo" <option value='".$city->kota."'>".$city->kota."</option> ";	
				}
				?>
			</select>
		</td>
	</tr>	
	<div id="report" class="report" style="display:none;visibility:hidden;">
		<tr>
		<td>Developher Total</td>
		<td></td>
		<!-- <td><input type="number" name="dev_total"  value="<?php echo$dev_total ?>"></td> -->
	</tr>		
	<tr>
		<td>Designer Total</td>
		<td></td>
		<!-- <td><input type="number" name="des_total"  value="<?php echo$des_total ?>"></td> -->
	</tr>		
	<tr>
		<td>Nilai Total Proyek</td>
		<td></td>
		<!-- <td><input type="number" name="pro_total"  value="<?php echo$pro_total ?>"></td> -->
	</tr>		
	<tr>
		<td>Nilai Total Donasi</td>
		<td></td>
		<!-- <td><input type="number" name="don_total"  value="<?php echo$don_total ?>"></td> -->
	</tr>		
	</div>	
</table>
<script src="<?php echo admin_assets('js/jquery.js') ?>"></script>	
<script>
	$('#tahun').on('change', function() {		  		
		//using the function:
		removeOptions(document.getElementById("kota"));	
	});


	$('#kota').on('change', function() {
  		alert( this.value ); // or $(this).val()
	});

	function removeOptions(selectbox)
	{
	    var i;
	    for(i=selectbox.options.length-1;i>=0;i--)
	    {
	        selectbox.remove(i);
	    }
	}
</script>