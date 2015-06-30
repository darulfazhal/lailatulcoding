<?php
class Event_model extends CI_Model {
	function __construct(){
	parent::__construct();
	}

	function insert_event($data){
		$this->db->insert('event', $data);
	}

  public function getAll()
  {
    $this->db->select("*");
    $this->db->from("event");
    return $this->db->get();
  }

  public function getById($id)
  {
    $this->db->select("*");
    $this->db->from("event");
    $this->db->where("id_event",$id);
    return $this->db->get();
  }

  public function store($data)
  {
    $query=$this->db->insert("event",$data);
  }

  public function update($id,$data)
  {
    $this->db->where('id_event',$id);
    $this->db->update('event',$data);
  }

  public function delete($id)
  {
    $this->db->where('id_event',$id);
    $this->db->delete('event');
  }


}
?>