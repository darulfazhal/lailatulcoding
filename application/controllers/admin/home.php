<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	private $_admin;

	public function __construct() {
		parent::__construct();
	    if(!$this->session->userdata('logged_in')) redirect('admin/login');
	    $this->_admin = $this->session->userdata('logged_in');
	}
	public function index()
	{
		$this->load->view('admin/main', $this->_admin);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */