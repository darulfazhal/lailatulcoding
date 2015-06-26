<?php $this->load->view('sections/head'); ?>
 <body>
 	<div class="row">
      <div class="large-12 columns">
        <h1>Welcome to Foundation</h1>
      </div>
    </div>
 	<div class="row">

      <div class="large-12 columns">

      	<ul class="tabs" data-tab>
 			<li class="tab-title active large-6"><a href="#panel1">Peserta</a></li>
  			<li class="tab-title large-6"><a href="#panel2">Event</a></li>
 		</ul>
		<div class="tabs-content">
  			<div class="content active" id="panel1">
  			<p><?php echo $this->session->flashdata('message');
  			print_r($this->session);
  			?>
      			<form action="<?php echo base_url();?>welcome/daftar_peserta" method="post" data-abide>
				  <div class="row">
				    <div class="large-6 columns">
				       <label>Nama Peserta <small>required</small>
					      <input type="text" id="nama_peserta" name="nama_peserta" placeholder="*Nama " required>
					   </label>
					   <small class="error">Nama Peserta Harus Diisi</small>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-6 medium-4 columns">
				    	<label>Email <small>required</small>
					         <input type="email" placeholder="email" name="email" required/>
					   </label>
				  
				        <small class="error">Email Harus Diisi</small>
				    </div>
				     
				  </div>
				   <div class="row">
				    <div class="large-6 medium-4 columns">
				     	<label>Telepon <small>required</small>
					        <input type="text" placeholder="Telepon" name="telepon" required/>
					   	</label>
					   	<small class="error">Telepon Harus Diisi</small>
				   	</div>
				     
				  </div>
				   <div class="row">
				    <div class="large-6 medium-4 columns">
				     <label>Skill <small>required</small>
				     <textarea placeholder="html,css,javascript" name="skill" required></textarea>
				     </label>
				     	<small class="error">Skill Harus Diisi</small>
				    </div>
				     
				  </div>
			 	  <input type="checkbox" name="agree" value="agree" id="agree"><label for="agree">I Agree ...</label>
				  	<div class="row">
				    <div class="large-12 columns">
				    <p><button type="submit" href="#" class="small button">Daftar</button>
				    </div>
				  </div>
				   
				</form>
  			</div>
		  	<div class="content" id="panel2">
		     
		  	</div>
  	
		</div>
       
      </div>
    </div>
  
<?php $this->load->view('sections/footer_scripts'); ?>