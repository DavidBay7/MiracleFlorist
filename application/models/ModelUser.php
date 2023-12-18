<?php

class ModelUser extends CI_Model
{

    public function getWhere($where)
    {
        return $this->db->get_where("users", $where);
    }
    public function insert($data)
    {
        $this->db->insert("users", $data);
    }
    public function get()
    {
        $this->db->select("users.*, roles.role AS role_role");
        $this->db->from("users");
        $this->db->join("roles", "roles.id = users.role_id");
        return $this->db->get();
    }
    public function update($data, $id){
        $this->db->where(["id" => $id]);
        $this->db->update("users", $data);
    }
    public function count()
	{
		$this->db->from('users');
		return $this->db->count_all_results();
	}
	public function deleteWhere($where)
	{
		$this->db->delete('users', $where);
	}

}

?>