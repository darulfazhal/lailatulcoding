<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		  
		
		 
	 
	}
	public function index()
	{
		//$this->load->view('welcome_message');
		if($this->session->userdata('logged_in'))
	   {
	  	 redirect("admin/home","refresh");
	   }else{
	   		$this->load->view('login_v');
	   }
	
   
	}
	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	  	 //query the database
	   	$result = $this->m_user->login($username, $password);

	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
	         'id' => $row->id,
	         'username' => $row->username,
	         'level' => $row->level
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	  	 redirect("admin/home","refresh");
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     redirect("admin/","refresh");
	   }
	}
	public function home()
	{
		if($this->session->userdata('logged_in'))
	   {
	  	 	$this->load->view('home_v');
	  	}else{
	  		 redirect("admin/","refresh");
	  	}
	}
	public function logout(){
		$this->session->unset_userdata('logged_in');
	   	
	   	redirect('admin/', 'refresh');
	}
	public function forgot_password(){
		 $email = $this->input->post('email');
		 $result = $this->m_user->check_email($email);
		 if($result){
		 	$generate = "";
		 	$password = sha1($password);
		 	redirect('admin/', 'refresh');
		 }else{
		 	redirect('welcome/forgot', 'refresh');
		 }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */