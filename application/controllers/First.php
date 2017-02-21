<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	public function index()
	{
                $config['base_url'] = base_url().'index.php/first/index/';
                $config['total_rows'] = $this->db->count_all('product_category');
                $config['per_page'] = '20'; 
                $config['full_tag_open'] = '<p style="color:red; text-align:center;">';
                $config['full_tag_close'] = '</p>';
                $this->pagination->initialize($config); 

                $this->load->model('product_category_model');
                $data['product_category'] = $this->product_category_model->get_category_model($config['per_page'], $this->uri->segment(3));
                $this->load->view('home-view', $data);
	}

	public function about()
	{
		$data['name'] = 'Дмитрий';
		$data['surname'] = 'Лысак';
		$data['age'] = 27;
		$this->load->view('about_view', $data);
	}
        
        public function category($id)
        {
                $this->load->model('product_category_model');
                $data['some_category'] = $this->product_category_model->get_category_by_get($id);
                $this->load->model('product_model');
                $data['products'] = $this->product_model->get_products_model($id);
                $this->load->model('product_category_model');
                $config['per_page'] = '20';
                $data['product_category'] = $this->product_category_model->get_category_model($config['per_page']);
                $this->load->view('category-view', $data);
        }

	/*public function articles()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/first/articles';
		$config['total_rows'] = $this->db->count_all('articles');
		$config['per_page'] = '1'; 
		$config['full_tag_open'] = '<p style="text-align:center; color:red">';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); 

		$this->load->model('articles_model');
		$data['articles'] = $this->articles_model->get_articles($config['per_page'], $this->uri->segment(3));
		$this->load->view('articles_view', $data);

	}

	public function upload_photo()
	{
		if(isset($_POST['download']))
		{
			$config['upload_path'] = './img/photos/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '1000';

		
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$image_data = $this->upload->data();

			$config = array(
				'image_library' => 'gd2',
				'source_image' => $image_data['full_path'], 
				'new_image' => APPPATH.'../img/photos/thumbs',
				'create_thumb' => TRUE,
				'maintain_ratio' => TRUE,
				'width' => 80,
				'height' => 80
			);

			$this->load->library('image_lib', $config); // загружаем библиотеку 
			$this->image_lib->resize(); // и вызываем функцию

			$config['source_image']	= $image_data['full_path'];
			$config['new_image'] = APPPATH.'../img/photos/wm';
			$config['wm_text'] = 'Copyright 2015 - Dmitriy Lysak';
			$config['wm_type'] = 'text';
			$config['wm_font_path'] = './system/fonts/texb.ttf';
			$config['wm_font_size']	= '16';
			$config['wm_font_color'] = '000000';
			$config['wm_vrt_alignment'] = 'top';
			$config['wm_hor_alignment'] = 'center';
			$config['wm_padding'] = '20';

			$this->image_lib->initialize($config); 
			$this->image_lib->watermark();

			$add['img'] = $image_data['file_name'];
			$this->db->insert('photos', $add);

			echo 'Файл успешно загружен';

		}
		else
		{
			$this->load->view('upload_view');
		}

	}

	public function add_article()
	{
		$data['title'] = 'Пятая статья';
		$data['text'] = 'Graecis molestiae inciderint eos ei, vix primis cotidieque id. Magna utamur reformidans ut quo, putent legimus cotidieque at per. Per no suavitate sententiae consequuntur, vis ex electram definiebas, diceret debitis reprimique ea vix. Pro ad senserit deseruisse, no has utinam perpetua. Omnis nulla expetenda no qui, usu vivendum deterruisset et. Usu ne eruditi argumentum, pro esse theophrastus no, impetus sapientem an nam.';
		$data['date'] = '2015-08-05';
		$this->load->model('articles_model');
		$this->articles_model->add_article($data);

	}

	public function edit_article()
	{
		$data['title'] = 'Новое название 5-ой статьи';
		$data['text'] = 'какой-то текст';
		$data['date'] = '2015-08-06';
		$this->load->model('articles_model');
		$this->articles_model->edit_article($data);

	}

	public function del_article($id)
	{
		$this->load->model('articles_model');
		$this->articles_model->del_article($id);
		
	}*/
}