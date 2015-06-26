<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	  
	function register_peserta($data)
	{
		  $this->db->insert('peserta', $data);
		  return true;
	}
	function login($username, $password)
	 {
	   $this -> db -> select('id, username, password,level,email');
	   $this -> db -> from('admin');
	   $this -> db -> where('username', $username);
	   $this -> db -> where('password', sha1($password));
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 	 
	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	 }
	
}