<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model {

	public $add_rules = array(
		array(
			'field' => 'title',
			'label' => 'Название статьи',
			'rules' => 'required|xss_clean|min_length[5]|max_length[50]|trim'
			),
		array(
			'field' => 'text',
			'label' => 'Текст статьи',
			'rules' => 'required|xss_clean|max_length[2000]|trim'
			),
		array(
			'field' => 'date',
			'label' => 'Дата добавления',
			'rules' => 'required|xss_clean|exact_length[10]|trim'
			)
		);
        
        public $product_category = array(
                array(
                    'field' => 'title',
                    'label' => 'Название',
                    'rules' => 'required|xss_clean|max_length[128]'
                ),
                array(
                    'field' => 'description',
                    'label' => 'Описание',
                    'rules' => 'required'
                )
            
        );
        
        public $product = array(
                array(
                    'field' => 'title',
                    'label' => 'Название',
                    'rules' => 'required|xss_clean|max_length[128]'
                ),
                array(
                    'field' => 'description',
                    'label' => 'Описание',
                    'rules' => 'required'
                )
            
        );

}