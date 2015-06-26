<?php $this->load->view('sections/head'); ?>
<style>
.columns{
	border:1px solid black;
}
.left-menu{
	border:1px solid black;
	height: 550px;
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
 
.content-tab{
 /*	border:1px solid red;*/
 padding: 30px;
	margin-left: 20px;
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
  <li class="tab-title active"><a href="#panel11">2012</a></li>
  <li class="tab-title"><a href="#panel21">2013</a></li>
  <li class="tab-title"><a href="#panel31">2014</a></li>
  <li class="tab-title"><a href="#panel41">2015</a></li>
</ul>
	<div class="tabs-content" style="height:550px !important;">
	  <div class="content active" id="panel11">
	  	<div class="small-9 columns content-tab">
	  	 <div class="small-6 columns">
	  	 		asd
	  	 </div>
	  	  <div class="small-6 columns">
	  	 		asd
	  	 </div>
	  	  <div class="small-12 columns">
	  	 		asd
	  	 </div>
	  	</div>

<div class="small-9 columns content-tab">
	  	 <div class="small-6 columns">
	  	 		asd
	  	 </div>
	  	  <div class="small-6 columns">
	  	 		asd
	  	 </div>
	  	  <div class="small-12 columns">
	  	 		asd
	  	 </div>
	  	</div>
	  </div>

	  


	  <div class="content" id="panel21">
	    <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
	  </div>
	  <div class="content" id="panel31">
	    <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
	  </div>
	  <div class="content" id="panel41">
	    <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
	  </div>
	</div>
  </div>
  
</div>
<div class="row">
  <div class="large-12 columns">12 columns</div>
  
</div>
<?php $this->load->view('sections/footer_scripts'); ?>