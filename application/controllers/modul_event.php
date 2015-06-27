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

            // Send Mail
            $email = "asd@jkl.zxc";
            $nama = "nunu";
            $subjek = "yuu";
            $pesan = "ini adalah pesan";
            $url = $_SERVER['HTTP_REFERER'];

            $config = Array(
              'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'annu.nura@gmail.com', //isi dengan gmailmu!
              'smtp_pass' => 'nuraooii', //isi dengan password gmailmu!
              'mailtype' => 'html',
              'charset' => 'iso-8859-1',
              'wordwrap' => TRUE
            );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($email);
            $this->email->to('angga.nunu@gmail.com'); //email tujuan. Isikan dengan emailmu!
            $this->email->subject($subjek);
            $this->email->message($pesan);
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
