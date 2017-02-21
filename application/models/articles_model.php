<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {

	public function get_articles($num, $offset)
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('articles', $num, $offset);
		return $query->result_array();
	}

	public function add_article($data)
	{
		$this->db->insert('articles', $data);
	}

	public function edit_article($data)
	{
		$this->db->where('id', '5');
		$this->db->update('articles', $data);
	}

	public function del_article($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('articles');
	}


}