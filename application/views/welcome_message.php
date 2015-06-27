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
      			<form action="welcome/daftar_peserta">
				  <div class="row">
				    <div class="large-6 columns">
				      <label>Nama Peserta</label>
				      <input type="text" placeholder="*Nama " name="nama_peserta"/>
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
				      <label>Skill</label>
				     <textarea placeholder="html,css,javascript" name="skill"></textarea>
				    </div>
				     
				  </div>
				  <!-- <div class="row">
				    <div class="large-6 columns">
				      <label>Select Box</label>
				      <select>
				        <option value="husker">Husker</option>
				        <option value="starbuck">Starbuck</option>
				        <option value="hotdog">Hot Dog</option>
				        <option value="apollo">Apollo</option>
				      </select>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-6 medium-6 columns">
				      <label>Choose Your Favorite</label>
				      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
				      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-6 columns">
				      <label>Textarea Label</label>
				      
				    </div>
				  </div> -->
				<input type="checkbox" name="agree" value="agree" id="agree"><label for="agree">I Agree ...</label>
				  <div class="row">
				    <div class="large-12 columns">
				    <p><a href="#" class="small button">Daftar</a>
				    </div>
				  </div>
				   
				</form>
  			</div>
		  	<div class="content right" id="panel2">
		     	<form action="welcome/daftar_peserta">
				  <div class="row">
				    <div class="large-6 columns">
				      <label>Nama Anda</label>
				      <input type="text" placeholder="*Nama " name="nama_pemohon"/>
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
				      <label>Kota Acara</label>
				      <input type="text" placeholder="Kota" name="kota"/>
				    </div>
				     
				  </div>
				  <div class="row">
				    <div class="large-6 medium-4 columns">
				      <label>Jumlah Peserta</label>
				      <input type="number" placeholder="Jumlah Peserta" name="jml_peserta"/>
				    </div>
				     
				  </div>
				<input type="checkbox" name="agree" value="agree" id="agree"><label for="agree">I Agree ...</label>
				  <div class="row">
				    <div class="large-12 columns">
				    <p><a href="#" class="small button">Daftarkan Event</a>
				    </div>
				  </div>
				   
				</form>
		  	</div>
  	
		</div>
       
      </div>
    </div>
  
<?php $this->load->view('sections/footer_scripts'); ?>