<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    
    function index()
    {
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        $data['all'] = $this->admin_model->dash();
        if(empty($data['user']) || $data['user_info']['status'] != 2)
        {
            if ($this->input->post('enter'))
            {
                $login = $this->input->post('login');
                $password = $this->input->post('password'); 
                //$password = sha1(md5($password));
                $check = $this->admin_model->check_admin($login, $password);
                if ($check == true)
                {
                    $data['user_info'] = $this->admin_model->user_info($login);
                    $ses_data = array(
                        'user'   => $login,
                        'status' => $data['user_info']['status'],
                    );
                    $this->session->set_userdata($ses_data);
                    redirect(base_url().'admin/');
                }
                else 
                {
                    $data['info'] = 'Вы не обладаете правами администратора!';
                }
            }
            $this->load->view('admin/login_view.php', $data);   
        }
        else 
        {
            $name = 'dash';
            $this->template->admin_view($data, $name);
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url()); 
    }
    
    function add($page)
    {
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        $data['categories'] = $this->admin_model->add_cat();
        if(!empty($data['user']) && $data['user_info']['status'] == 2) 
        {
            $this->form_validation->set_rules($this->rules_model->$page);
            if($this->form_validation->run() && $this->input->post('add'))
            {   
                $config['upload_path'] = './photo/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';    
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('upload');
                $upload_data = $this->upload->data();
                
                $add['photo_url'] = $upload_data['file_name'];
                $add['title'] = $this->input->post('title');
                $add['description'] = $this->input->post('description');
                $add['visible'] = $this->input->post('hidden');
                $add['akcia'] = $this->input->post('akcia');
                $add['product_photo'] = $this->input->post('product_photo');
                $add['price'] = $this->input->post('price');
                $add['category_id'] = $this->input->post('category_name');
                
                foreach ($add as $key => $value) {
                    if(!$add[$key]){
                        unset($add[$key]);
                    }
                }
                
                $this->admin_model->add($page, $add);
                $data['info'] = '<span id="uspeh">Операция прошла успешно!</span>';
                $data['reload'] = header( "refresh:1;url=".$page );
                $name = 'info';
                $this->template->admin_view($data,$name);
            }
            else
            {
                $name = 'add/'.$page;
                $this->template->admin_view($data, $name);
            }
        }
        else 
        {
            redirect(base_url().'admin/');
        }
    
    }
    
    function editlist($page)
    {
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        $data['categories'] = $this->admin_model->add_cat();
        if(!empty($data['user']) && $data['user_info']['status'] == 2) 
        {
            $data['page'] = $page;
            if($page == 'product'){
                $data['edit'] = $this->admin_model->get_editproduct();
            }
            else {
                $data['edit'] = $this->admin_model->get_editlist($page);
            }
            $name = 'edit/'.$page;
            $this->template->admin_view($data, $name);
        }
        else 
        {
            redirect(base_url().'admin/');
        }
    }
    
    function edit($page, $id='')
    {
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        $data['categories'] = $this->admin_model->add_cat();
        $page = str_replace('edit_', '', $page);                     //Костыль для выбора правильной таблицы базы
        $data['pages_info'] = $this->admin_model->get_info($page, $id);
        $data['cat_info'] = $this->admin_model->cat_info($id);
        if(!empty($data['user']) && $data['user_info']['status'] == 2) 
        {
            $this->form_validation->set_rules($this->rules_model->$page);
            if($this->form_validation->run() && $this->input->post('edit'))
            {   
                $config['upload_path'] = './photo/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';    
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('upload');
                $upload_data = $this->upload->data();
                //print_r($upload_data);
                
                $edit['photo_url'] = $upload_data['file_name'];
                $edit['title'] = $this->input->post('title');
                $edit['description'] = $this->input->post('description');
                $edit['visible'] = $this->input->post('hidden');
                $edit['akcia'] = $this->input->post('akcia');
                $edit['product_photo'] = $this->input->post('product_photo');
                $edit['price'] = $this->input->post('price');
                $edit['category_id'] = $this->input->post('category_name');
                if($page == 'product' && !$edit['akcia'])
                {
                    $edit['akcia'] = '123';
                } 
                foreach ($edit as $key => $value) {
                    if(!$edit[$key]){
                        unset($edit[$key]);
                    }
                }
                if($page == 'product' && $edit['akcia']=='123')
                {
                    $edit['akcia'] = '';
                }
                
                $this->admin_model->edit($page, $id, $edit);
                $data['reload'] = header( "refresh:1;url=".$id );
                $data['info'] = '<span id="uspeh">Операция прошла успешно!</span>';
                $name = 'info';
                $this->template->admin_view($data,$name);
            }
            else
            {
                $name = 'edit/edit_'.$page;
                $this->template->admin_view($data, $name);
            }
        }
        else 
        {
            redirect(base_url().'/admin/');
        }
    
    }
    
    function del($page, $id)
    {
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        $data['categories'] = $this->admin_model->add_cat();
        if(!empty($data['user']) && $data['user_info']['status'] == 2) 
        {
            $data['page'] = $page;
            if($page == 'product'){
                $data['edit'] = $this->admin_model->get_editproduct();
            }
            else {
                $data['edit'] = $this->admin_model->get_editlist($page);
            }
            
            $this->admin_model->del($page, $id);
            $name = 'edit/'.$page;
            $this->template->admin_view($data, $name);
            redirect(base_url().'admin/editlist/'.$page);
        }
        else 
        {
            redirect(base_url().'admin/');
        }
    }
    
}

