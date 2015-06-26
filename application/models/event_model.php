<?php
class Event_model extends CI_Model {
	function __construct(){
	parent::__construct();
	}

	function insert_event($data){
		$this->db->insert('event', $data);
	}
}
?>