<?php

class ModelProduct extends CI_Model
{

    public function get()
    {
        $this->db->from("products");
        return $this->db->get();
    }
	public function deleteWhere($where)
	{
		$this->db->delete('products', $where);
	}
    public function update($data, $id)
    {
        $this->db->where(["id" => $id]);
        $this->db->update("products", $data);
    }
    public function count()
	{
		$this->db->from('products');
		return $this->db->count_all_results();
	}

}

?>