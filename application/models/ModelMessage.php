<?php

class ModelMessage extends CI_Model
{

    public function get()
    {
        $this->db->from("messages");
        return $this->db->get();
    }
    public function insert($data)
    {
        $this->db->insert("messages", $data);
    }
    public function delete($id) 
    {
        $this->db->where('id', $id);
        $this->db->delete('messages');
    }
    public function count()
	{
		$this->db->from('messages');
		return $this->db->count_all_results();
	}
}

?>