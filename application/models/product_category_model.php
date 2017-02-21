<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_category_model extends CI_Model {

	public function get_category_model($num, $offset=0)
	{
		$this->db->order_by('id', 'asc');
                $this->db->where('visible', 1);
		$query = $this->db->get('product_category', $num, $offset);
		return $query->result_array();
	}
        
        public function get_category_by_get($id)
	{
		$query = $this->db->get_where('product_category', array('id' => $id, 'visible' => 1));
                return $query->result_array();
	}

	public function add_article($data)
	{
		$this->db->insert('product_category', $data);
	}

	public function edit_article($data)
	{
		$this->db->where('id', '1');
		$this->db->update('product_category', $data);
	}

	public function del_article($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('product_category');
	}


}