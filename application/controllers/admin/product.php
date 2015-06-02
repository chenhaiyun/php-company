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


        //分页
        $config= array();
        $config['per_page'] = 4; //每页显示的数据数
        $current_page       = intval($this->input->get_post('per_page',true)); //获取当前分页页码数
        //page还原
        if(0 == $current_page)
        {
            $current_page = 1;
        }
        $offset = ($current_page - 1 ) * $config['per_page']; //设置偏移量 限定 数据查询 起始位置（从 $offset 条开始）
        $result  = $this->product->list_product($offset,$config['per_page'],$order='id desc');
        $config['base_url']           = site_url('admin/product/list_product');
        $config['total_rows']         = $result['total'];
        $config['num_links'] = 3;
        $config['use_page_numbers']   = TRUE;
        $config['page_query_string']  = TRUE;

        $this->load->library('pagination');//加载ci pagination类

        $this->pagination->initialize($config);
        $data = array(
            'product_list'  => $result['list'],
            'total'   => $result['total'],
            'current_page' => $current_page,
            'per_page'  => $config['per_page'],
            'page_link'   => $this->pagination->create_links(),
        );

        $this->load->view('admin/inc/header.php', $data);
        $this->load->view('admin/inc/top.php');
        //$this->load->view('admin/inc/menus.php');
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