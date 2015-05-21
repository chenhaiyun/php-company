<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/21
 * Time: 12:23
 */

class Product extends COM_Controller{

    public function __construct() {

        parent::__construct();

        $this->load->model('admin/product_model', 'product');

    }


    public function list_product() {

        //$data['category_list'] = $this->category->list_category();

        $data['product_list'] = $this->product->list_product();

        $this->load->view('admin/inc/header.php', $data);
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/product/list.php');
        $this->load->view('admin/inc/footer.php');

    }


    public function add_product() {



        //产品图片上传
        $config['upload_path'] = './uploads/products/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);
        $field_name = "product_image";
        $this->upload->do_upload($field_name);
        $up_file = $this->upload->data();


        //获取产品数据
        $this->load->model('admin/category_model', 'category');
        $data['category_list'] = $this->category->list_category();

        $this->load->view('admin/inc/header.php',$data);
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/product/add.php');
        $this->load->view('admin/inc/footer.php');

        if($this->input->post('submit')) {

            $product = array(
                'product_name' => $this->input->post('product_name'),
                'product_category' => $this->input->post('product_category'),
                'product_desc' => $this->input->post('product_desc'),
                'product_image' => $up_file['file_name']
            );

            $res = $this->product->add_product($product);

            if($res) {
               header('Location: '.site_url('admin/product/list_product'));
            }

        }

    }

    public function remove_product() {

        $id = $this->uri->segment(4);
        $this->product->remove_product($id);
        header('Location: '.site_url('admin/product/list_product'));

    }


}