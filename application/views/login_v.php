	<?php $this->load->view('sections/head'); ?>
	<body>
	<?php echo form_open('admin/do_login','data-abide');?>
	<div class="row">
	    <div class="large-6 columns">
	       <label>Username <small>required</small>
		      <input type="text" id="username" name="username" placeholder="*Nama " required>
		   </label>
		   <small class="error">Username Harus Diisi</small>
	    </div>
	  </div>
	  <div class="row">
	    <div class="large-6 medium-4 columns">
	    	<label>Password <small>required</small>
		         <input type="password" placeholder="password" name="password" required/>
		   </label>
	  
	        <small class="error">Password Harus Diisi</small>
	    </div>
	     
	  </div>
	  <div class="row">
	    <div class="large-12 columns">
	    <p><button type="submit" href="#" class="small button">Login</button>
	    <a href="welcome/forgot">Lupa Password</a>
	    </div>
	  </div>
	  </form>
	  </body>
	 <?php $this->load->view('sections/footer_scripts'); ?>