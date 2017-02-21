<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Template 
{
    function admin_view($data, $name)
    {
        $CI =& get_instance();
        $CI->load->view('admin/'.$name.'_view', $data);
    }

}