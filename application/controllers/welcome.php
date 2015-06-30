<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function daftar_peserta()
	{

//a
		        $message = '';
		        $this->load->library('email', $config);
		      $this->email->set_newline("\r\n");
		      $this->email->from('akunozo@gmail.com'); // change it to yours
		      $this->email->to('fazhaldarul@gmail.com');// change it to yours
		      $this->email->subject('Resume from JobsBuddy for your Job posting');
		      $this->email->message($message);
		      if($this->email->send())
		     {
		      echo 'Email sent.';
		     }
		     else
		    {
		     show_error($this->email->print_debugger());
		    }

	    $this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required');
	    $this->form_validation->set_rules('email', 'Email', 'required');
     	$this->form_validation->set_rules('telepon', 'Telepon', 'required');
       	$this->form_validation->set_rules('skill', 'Skill', 'required');
		if ($this->form_validation->run() == true){
			$data['nama_peserta'] = $this->input->post('nama_peserta');
			$data['email'] = $this->input->post('email');
			$data['telpon'] = $this->input->post('telepon');
			$data['skill'] = $this->input->post('skill');
			$data['jobs'] = $this->input->post('jobs');
			$insert = $this->m_user->register_peserta($data);
			if($insert){
			 	$this->session->set_flashdata('message', 'Terima Kasih');
				redirect("/","refresh");
			}else{
				$this->session->set_flashdata('message', 'Ada Kesalahan');
			}
		}else{
			$this->session->set_flashdata('message', 'Validasi');
		}
	}
	public function forgot(){
		$this->load->view('forgot_v');
	}
	public function laporan(){
		$this->load->view('laporan_v');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */