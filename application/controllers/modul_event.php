<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul_event extends CI_Controller {

	function __construct() {
		parent::__construct();
    $this->load->model('event_model');
    $this->load->library('email');
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

            // Send Mail
            $email = $data['email'];
            $nama = $data['nama_penyelenggara'];
            $this->email->from($email,$nama);
            $this->email->to('annu.nura@gmail.com'); 
            //$this->email->cc('another@another-example.com'); 
            //$this->email->bcc('them@their-example.com'); 

            $this->email->subject('Request Event');
            $this->email->message('Ini adalah isi Email');  

            if($this->email->send())
            {
              $this->event_model->insert_event($data);
              $this->session->set_flashdata('category_success', 'Berhasil Di Tambah');
              redirect('http://localhost/lailatulcoding');
            }
            else
            {
              show_error($this->email->print_debugger());
            }
            // End Send Mail
    }
 

}
