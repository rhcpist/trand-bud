<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function user_info($user)
        {
            $this->db->where('username', $user);
            $query = $this->db->get('email');
            return $query->row_array();
        }


}