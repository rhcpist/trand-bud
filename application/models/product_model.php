<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function get_products_model($id)
	{
		$this->db->where('category_id', $id);
		$query = $this->db->get('product');
		return $query->result_array();
	}


}