<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Helpers extends CI_Controller {
	
	public function all_helpers() 
	{
		$this->load->helper('text');
		$this->load->helper('html');
		$this->load->helper('string');
		$string = random_string('alpha_dash', 7);

		$this->load->helper('captcha');
		$vals = array(
	    	'word'	=> $string,
	    	'img_path'	=> './img/captcha/',
	   		'img_url'	=> base_url().'img/captcha/',
	    	'font_path'	=> './system/fonts/texb.ttf',
	    	'img_width'	=> '200',
	   		'img_height' => 30,
	    	'expiration' => 7200
   		 );
		$cap = create_captcha($vals);
		echo $cap['image'];

		$this->load->view('helpers_view');
	}
}