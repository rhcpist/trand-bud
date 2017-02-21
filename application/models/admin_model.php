<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function check_admin($login, $password)
        {
            $this->db->where('username', $login);
            $this->db->where('password', $password);
            $this->db->where('status', 2);
            $query = $this->db->get('users');
            if ($query->num_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
        function user_info($user)
        {
            $this->db->where('username', $user);
            $query = $this->db->get('users');
             return $query->row_array();
        }
        
        function add($page, $add)
        {
            $this->db->insert($page, $add);               
        }
        
        function add_cat()
        {
            $this->db->select('product_category.title, product.category_id, product_category.id');
            $this->db->from('product_category');
            $this->db->join('product', 'product_category.id = product.category_id', 'left');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        function get_editlist($page)
        {
            $this->db->order_by('id', 'desc');
            $query = $this->db->get($page);
            return $query->result_array();
        }
        
        function get_editproduct()
        {
            $this->db->order_by('product.id', 'desc');
            $this->db->select('product_category.title as cat_name, product.category_id, product.title, product.description, product.id, product.price', 'name');
            $this->db->from('product_category');
            $this->db->join('product', 'product_category.id = product.category_id', 'join');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        function get_info($page, $id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get($page);
            return $query->row_array();
        }
        
        function cat_info($id)
        {
            $this->db->where('product.id', $id);
            $this->db->select('product_category.title as cat_name, product.category_id, product_category.id, product.akcia');
            $this->db->join('product', 'product_category.id = product.category_id', 'join');
            $query = $this->db->get('product_category');
            return $query->row_array();
        }
        
        function edit($page, $id, $edit)
        {
            $this->db->where('id', $id);
            $this->db->update($page, $edit);
            
        }
        
        function del($page, $id)
        {
            $this->db->where('id', $id);
            $this->db->delete($page);
        }
        
        function dash()
        {
            $this->db->select('pc.`title` AS cat_name, p.`title` AS pr_name, COUNT( p.`title` ) AS count, pc.visible, pc.id');
            $this->db->join('product as p', 'pc.id = p.category_id', 'left');         
            $this->db->group_by('pc.title'); 
            $query = $this->db->get('product_category as pc');
            return $query->result_array();
            
        }

}