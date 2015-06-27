<?php $this->load->view('sections/head'); ?>
<body>

<!-- Header Navigation-->
<div class="content">
	<div class="row">
			<div class="head-nav">
				<div class="left top-20">
					<img src="<?php echo base_url('assets/images'); ?>/logo-lailatul-coding.png" />
				</div>
				<div class="right top-30">
					<a href="" class="small button ">Cara Kerja</a>
					<a href="" class="small button ">Registrasi</a>
					<a href="" class="small button ">Laporan</a>
				</div>
			</div>
			<div class="caption-banner">
				<p>Malam Lailatul Coding adalah malam amal bagi para pekerja kreatif <br>
				untuk saling berpartisipasi tidak hanya dalam bentuk uang, tetapi <br>
				juga berupa sumbangan keahlian.</p>
				<a href="" class="small button ">Lailatul Coding 2016, 1 juni - 2 juni, 18:00-05:00</a>
			</div>
		<img src="<?php echo base_url('assets/images'); ?>/header-background.jpg" />
	</div>
	<div class="row">
			<h1 class="center">Cara Kerja</h1>
		<div class="center">
			<div class="small-4 column">
				<img src="<?php echo base_url('assets/images'); ?>/icon-developer.png" />
				<h3>Developer / Designer</h3>
				<p>Sumbangan dapat berbentuk keahlian Coding / Design untuk menyelesaikan project</p>
			</div>
			<div class="small-4 column">
				<img src="<?php echo base_url('assets/images'); ?>/icon-project-owner.png" />
				<h3>Project Owner</h3>
				<p>Sewa Developer atau Designer ditempat untuk menyumbang</p>
			</div>
			<div class="small-4 column">
				<img src="<?php echo base_url('assets/images'); ?>/icon-donation.png" />
				<h3>Donate On The Spot</h3>
				<p>Datang Langsung untuk memberikan sumbangan</p>
			</div>
		</div>
		<div class="row">
			
			<img src="<?php echo base_url('assets/images'); ?>/donation-background.png" width="100%"/>
			<div class="caption-flag">
				<p>Lailatul Coding 2016 akan disumbangkan <br>
				kepada Red Cross International. <br>
				www.redcross.com</p>
			</div>
		</div>
	</div>
	<div class="row">
		<h1 class="center">Registrasi Lailatul Coding 2016</h1>
		<div class="large-12 columns">

      	<ul class="tabs" data-tab>
 			<li class="tab-title active large-6"><a href="#panel1">Peserta</a></li>
  			<li class="tab-title large-6"><a href="#panel2">Event</a></li>
 		</ul>
		<div class="tabs-content">
  			<div class="content active" id="panel1">
  			<p><?php echo $this->session->flashdata('message'); ?>
      			<form action="<?php echo base_url();?>welcome/daftar_peserta" method="post" data-abide>
				  <div class="row">
				    <div class="large-6 columns">
				       <label>Nama Peserta <small>required</small>
					      <input type="text" id="nama_peserta" name="nama_peserta" placeholder="*Nama " required>
					   </label>
					   <small class="error">Nama Peserta Harus Diisi</small>
				    </div>
				 
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
				     
				   
				    <div class="large-6 medium-4 columns">
				     	<label>Jobs <small>required</small>
					      
					   	</label>
					   	  <input type="radio"  name="jobs" value="Developer" checked /> Developer
					        <input type="radio"  name="jobs" value="Designer" /> Designer
					   	<small class="error">Telepon Harus Diisi</small>
				   	</div>
				     
				  </div>
				   <div class="row">
				    <div class="large-12 medium-4 columns">
				     <label>Skill <small>required</small>
				     	<textarea placeholder="html,css,javascript" name="skill" required></textarea>
				     </label>
				     	<small class="error">Skill Harus Diisi</small>
				    </div>
				     
				  </div>
			 	  <!-- <input type="checkbox" name="agree" value="agree" id="agree"><label for="agree">I Agree ...</label> -->
				   
				   <div class="row">
					    <div class="small-6 small-centered text-center columns">
					        <button type="submit" href="#" class="small button small-centered ">Daftar</button>
					    </div>
					</div>
				</form>
  			</div>
		  	<div class="content" id="panel2">
		     	<?php echo form_open_multipart('modul_event/add_event'); ?>
				  <div class="row">
				    <div class="large-6 columns">
				      <label>Nama Anda</label>
				      <input type="text" placeholder="*Nama " name="nama_penyelenggara"/>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-6 medium-4 columns">
				      <label>Email</label>
				      <input type="email" placeholder="email" name="email"/>
				    </div>
				     
				  </div>
				   <div class="row">
				    <div class="large-6 medium-4 columns">
				      <label>Telepon</label>
				      <input type="text" placeholder="Telepon" name="telepon"/>
				    </div>
				     
				  </div>
				  <div class="row">
				    <div class="large-6 medium-4 columns">
				      <label>Alamat Anda</label>
				      <textarea placeholder="Alamat Anda" name="alamat"></textarea>
				    </div>
				     
				  </div>
				  <hr>
				   <div class="row">
				    <div class="large-6 medium-4 columns">
				      <label>Kota Acara</label>
				      <input type="text" placeholder="Kota" name="kota"/>
				    </div>
				     
				  </div>
				  <div class="row">
				    <div class="large-6 medium-4 columns">
				      <label>Tahun Acara</label>
				      <input type="text" placeholder="Tahun Acara" name="tahun"/>
				    </div>
				     
				  </div>
				  <div class="row">
				    <div class="large-6 medium-4 columns">
				      <label>Jumlah Peserta</label>
				      <input type="number" placeholder="Jumlah Peserta" name="jml_peserta"/>
				    </div>
				     
				  </div>
				<!-- <input type="checkbox" name="agree" value="agree" id="agree"><label for="agree">I Agree ...</label> -->
				  <div class="row">
				    <div class="large-12 columns">
				    <input type="submit" value="asd" class="small button">
				    </div>
				  </div>
				   
				</form>
		  	</div>
  	
		</div>
       


      </div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- End Header Navigation-->

<?php $this->load->view('sections/footer_scripts'); ?>
