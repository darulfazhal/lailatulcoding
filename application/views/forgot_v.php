	<?php $this->load->view('sections/head'); ?>
	<body>
	<?php echo form_open('admin/do_forgot_password','data-abide');?>
	<div class="row">
	<p><?php echo $this->session->flashdata('message');
  		 
  			?>
	    <div class="large-6 columns">
	       <label>Email <small>required</small>
		      <input type="text" id="email" name="email" placeholder="*Masukan Email " required>
		   </label>
		   <small class="error">Email Harus Diisi</small>
	    </div>
	  </div>
	   
	  <div class="row">
	    <div class="large-12 columns">
	    	<p><button type="submit" href="#" class="small button">Kirim Password</button>
	    
	   	</div>
	  </div>
	  </form>
	  </body>
	 <?php $this->load->view('sections/footer_scripts'); ?>