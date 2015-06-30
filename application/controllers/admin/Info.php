<?php
class Info extends CI_Controller
{
	private $_admin;


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('infos_model');
		if(!$this->session->userdata('logged_in')) redirect('admin/login');
	    $this->_admin = $this->session->userdata('logged_in');
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
		$data['kota']="";
		$data['tahun']="";
		$data['dev_total']="";
		$data['des_total']="";
		$data['pro_total']="";
		$data['don_total']="";
		$data['created_at']="";
		$data['updated_at']="";

		$this->load->view('infos/create',$data);
	}

	// /Info/store
	public function store()
	{
		$data['id']=$this->input->post('id');
		$data['kota']=$this->input->post('kota');
		$data['tahun']=$this->input->post('tahun');
		$data['dev_total']=$this->input->post('dev_total');
		$data['des_total']=$this->input->post('des_total');
		$data['pro_total']=$this->input->post('pro_total');
		$data['don_total']=$this->input->post('don_total');
		$data['created_at']=$this->input->post('created_at');

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
		$data['kota']=$this->input->post('kota');
		$data['tahun']=$this->input->post('tahun');
		$data['dev_total']=$this->input->post('dev_total');
		$data['des_total']=$this->input->post('des_total');
		$data['pro_total']=$this->input->post('pro_total');
		$data['don_total']=$this->input->post('don_total');
		$data['created_at']=$this->input->post('created_at');
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
	// /Info/report
	public function report()
	{
		$data['id']="";
		$data['kota']="";
		$data['tahun']="";
		$data['dev_total']="";
		$data['des_total']="";
		$data['pro_total']="";
		$data['don_total']="";
		$data['created_at']="";
		$data['updated_at']="";
		$data['cities']=$this->infos_model->getCity(Date('Y'))->result();

		$this->load->view('infos/report',$data);
	}

	public function ajax()
	{
		$result=$this->infos_model->getCity($this->input->post('year'))->result();
	 	$list = array();
	    while($row = $result->fetch_assoc())
	    {
	        $list[] = $row['kota'];
	    }

	    return json_encode($list);

	}

}

?>