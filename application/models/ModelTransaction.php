<?php

class ModelTransaction extends CI_Model{

    public function get(){
        // // $this->db->select("users.*, roles.role");
        // // $this->db->join("roles", "roles.id = users.id");
        // return $this->db->getWhere("users", $where);
        $this->db->select("transactions.*, products.name AS product_name, products.price AS product_price, users.name AS user_name");
        $this->db->from("transactions");
        $this->db->join("products", "products.id = transactions.product_id");
        $this->db->join("users", "users.id = transactions.user_id");
        return $this->db->get();
    }
    public function update($data, $id){
        $this->db->where(["id" => $id]);
        $this->db->update("transactions", $data);
    }
    public function count()
	{
		$this->db->from('transactions');
		return $this->db->count_all_results();
	}

}

?>