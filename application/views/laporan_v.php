<?php $this->load->view('sections/head'); ?>
<style>
.columns{
	/*border:1px solid black;*/

}
.left-menu{
	/*border:1px solid black;*/
	height: 500px;
	position:relative;
	background-color:#01a651;
}
.header{
	padding:10px;
}
.sub-nav{
	float:right;
	color:#01a651 !important;
}
.content{

}
.content-tab{
 /*	border:1px solid red;*/
 	padding: 30px;
	margin-left: 20px;
	height: 500px;
	overflow-y: scroll;
}
.content-tab .row{
	margin-bottom: 20px;	 
	 
}
.content-tab .columns{
 
}
.content-detail{
	background-color:#e9f4ea;
 	padding-top: 5px;
}
.content-project-value{
	color:white;
	background-color:#ef6333;
	 padding:40px;
	 background: #ef6333 url("../assets/images/arrow-nominal-project.png");
	 background-repeat: no-repeat;
	 background-position: 0px;
}
.content-project-value h2, h3{
	color: white;
	margin:auto;
	 
}
.content-project-donate{
	color:white;
	background-color:#ef797d;
	padding:10px;
	 background: #ef797d url("../assets/images/arrow-nominal-donasi.png");
	 background-repeat: no-repeat;
	 background-position: 75% 0px;
}
.tab-default{
	display: block;
      background-color: #01a651;
      color: #222222;
      font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
      font-size: 1rem;
      text-align: center;
      padding:10px;
}
.tab-default a{
	color:white;
}
.tab-title a{
	color:white;
}
</style>
 <body>
 	<div class="row header">
  <div class="small-4 columns"><img src="<?php echo base_url();?>assets/images/logo-lailatul-coding.png"></div>
  <div class="small-8 columns">
  	<dl class="sub-nav">
  
  
  <dd><a href="#">Cara Kerja</a></dd>
  <dd><a href="#">Registrasi</a></dd>
  <dd class="hide-for-small-only"><a href="#">Laporan</a></dd>
</dl>

  </div>
</div>
<div class="row" >
  <div class="small-12 columns">
  <ul class="tabs vertical left-menu" data-tab>
  <li class="tab-default"><a href="#panel11">Tahun</a></li>
  <li class="tab-title active"><a href="#panel11">2012</a></li>
  <li class="tab-title"><a href="#panel21">2013</a></li>
  <li class="tab-title"><a href="#panel31">2014</a></li>
  <li class="tab-title"><a href="#panel41">2015</a></li>
</ul>
	<div class="tabs-content" style="height:550px !important;">
	  	<div class="content active parent-scroll" id="panel11">
		  	<div class="small-9 columns content-tab">
		  		 
				<div class="row">
				  	<div class="small-6 columns content-detail">
				  	 	<div class="row">
						  	<div class="small-3 columns content-detail">
						  	 	<img src="<?php echo base_url();?>/assets/images/icon-total-developer.png">
						  	</div>
						  	 <div class="small-9 columns content-detail">
						  	 		40 Developers<br>6 Designers
						  	</div>
				  		</div>
				  		<div class="row">
						  	<div class="small-3 columns content-detail">
						  	 	<img src="<?php echo base_url();?>/assets/images/icon-total-project.png">
						  	</div>
						  	 <div class="small-9 columns content-detail">
						  	 		7 Proyek
						  	</div>
				  		</div>
				  	</div>
				  	<div class="small-6 columns content-project-value">
				  	 	<h3>Nilai Total Projek</h3>
				  	 	<h2>Rp. 10.000.000</h2>
				  	</div>
				  	<div class="small-12 columns content-project-donate">
				  	 		<div class="row">
						  	<div class="small-3 columns">
						  	 	<img src="<?php echo base_url();?>/assets/images/icon-donation.png">
						  	</div>
						  	 <div class="small-8 columns ">
						  	 		Total Donasi<br>
						  	 		<p>RP. 9.756.000</p><br>

						  	 		<p>Dana yang diterima telah disumbangkan ke MER-C 
						  	 		kemanusiaan gaza sebesar
						  	 		</p>

						  	</div>
				  		</div>
				  	</div>
				</div>

				<div class="row">
				  	<div class="small-6 columns content-detail">
				  	 	<div class="row">
						  	<div class="small-3 columns content-detail">
						  	 	<img src="<?php echo base_url();?>/assets/images/icon-total-developer.png">
						  	</div>
						  	 <div class="small-9 columns content-detail">
						  	 		40 Developers<br>6 Designers
						  	</div>
				  		</div>
				  		<div class="row">
						  	<div class="small-3 columns content-detail">
						  	 	<img src="<?php echo base_url();?>/assets/images/icon-total-project.png">
						  	</div>
						  	 <div class="small-9 columns content-detail">
						  	 		7 Proyek
						  	</div>
				  		</div>
				  	</div>
				  	<div class="small-6 columns content-project-value">
				  	 	<h3>Nilai Total Projek</h3>
				  	 	<h2>Rp. 10.000.000</h2>
				  	</div>
				  	<div class="small-12 columns content-project-donate">
				  	 		<div class="row">
						  	<div class="small-3 columns">
						  	 	<img src="<?php echo base_url();?>/assets/images/icon-donation.png">
						  	</div>
						  	 <div class="small-8 columns ">
						  	 		Total Donasi<br>
						  	 		<p>RP. 9.756.000</p><br>

						  	 		<p>Dana yang diterima telah disumbangkan ke MER-C 
						  	 		kemanusiaan gaza sebesar
						  	 		</p>

						  	</div>
				  		</div>
				  	</div>
				</div>
		  	</div>
 		</div>
 		 
	</div>
  </div>
  
</div>
<div class="row">
  <div class="large-12 columns">12 columns</div>
  
</div>
<?php $this->load->view('sections/footer_scripts'); ?>