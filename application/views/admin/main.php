<?php
	$this->load->view('admin/header');
	if(exist($content)) $this->load->view('admin/'.$content);
	$this->load->view('admin/footer');
?>