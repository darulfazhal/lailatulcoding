<?php
class Info extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('infos_model');
	}

	// /Info/index
	public function index()
	{		
		$data['infos'] = $this->infos_model->getAll()->result();
		$this->load->view('infos/index',$data);
	}
	
	// /Info/create
	public function create()
	{
		$data['id']="";
		$data['kota_id']="";
		$data['tahun']="";
		$data['user_total']="";

		$this->load->view('infos/create',$data);
	}

	// /Info/store
	public function store()
	{
		$data['id']=$this->input->post('id');
		$data['kota_id']=$this->input->post('kota_id');
		$data['tahun']=$this->input->post('tahun');
		$data['user_total']=$this->input->post('user_total');

		$this->infos_model->store($data);
		redirect(site_url('info/index'));
	}

	// /Info/edit
	public function edit($id)
	{
		$data=$this->infos_model->getById($id)->result()[0];			
		$this->load->view('infos/create',$data);
	}


	// /Info/update
	public function update()
	{		
		$data['id']=$this->input->post('id');
		$data['kota_id']=$this->input->post('kota_id');
		$data['tahun']=$this->input->post('tahun');
		$data['user_total']=$this->input->post('user_total');		
		$this->infos_model->update($data['id'],$data);
		redirect(site_url('info/index'));
	}

	// /Info/delete
	public function delete()
	{
		$data['id']=$this->input->post('id');		
		$this->infos_model->delete($data['id']);
		redirect(site_url('info/index'));
	}
}

?>