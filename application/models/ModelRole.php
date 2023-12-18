<?php

class ModelRole extends CI_Model
{

    public function get()
    {
        $this->db->from("roles");
        return $this->db->get();
    }
    public function update($data, $id)
    {
        $this->db->where(["id" => $id]);
        $this->db->update("roles", $data);
    }
    public function deleteWhere($where)
	{
		$this->db->delete('roles', $where);
	}

}

?>