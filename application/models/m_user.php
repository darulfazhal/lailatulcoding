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
	 function update_user($user_id, $password){
	 		$data = Array(
				'password'=>$password
				 
			);
			$this->db->where('id', $user_id);
			$this->db->update("admin", $data); 
			return true;
	 }
	 function check_email($email){
	   $this -> db -> select('*');
	   $this -> db -> from('admin');
	   $this -> db -> where('email', $email);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 	
	   if($query -> num_rows() == 1)
	   {
	     return $query->row();
	   }
	   else
	   {
	     return false;
	   }
	 }
	
}