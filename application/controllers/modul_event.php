<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul_event extends CI_Controller {

	function __construct() {
		parent::__construct();
    $this->load->model('event_model');
	}

	public function add_event() {
           	$data['nama_penyelenggara'] = $this->input->post('nama_penyelenggara');
            $data['email'] = $this->input->post('email');
            $data['telpon'] = $this->input->post('telepon');
            $data['alamat'] = htmlentities( $this->input->post('alamat') );
            $data['kota'] = $this->input->post('kota');
            $data['jml_peserta'] = $this->input->post('jml_peserta');
            $data['tahun'] = $this->input->post('tahun');
      			$data['tgl_pengajuan'] = date("Y-m-d h:i:s");

          	$this->event_model->insert_event($data);
          	$this->session->set_flashdata('category_success', 'Berhasil Di Tambah');
			      redirect('http://localhost/lailatulcoding');
    }
 

}
