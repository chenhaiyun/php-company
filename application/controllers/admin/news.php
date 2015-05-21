<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/21
 * Time: 12:23
 */

class News extends COM_Controller{

    public function __construct() {

        parent::__construct();

        $this->load->model('admin/news_model', 'news');

    }


    public function list_news() {


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
        $result  = $this->news->list_news($offset,$config['per_page'],$order='id desc');
        $config['base_url']           = site_url('admin/news/list_news');
        $config['total_rows']         = $result['total'];
        $config['num_links'] = 3;
        $config['use_page_numbers']   = TRUE;

        $this->load->library('pagination');//加载ci pagination类

        $this->pagination->initialize($config);
        $data = array(
            'news_list'  => $result['list'],
            'total'   => $result['total'],
            'current_page' => $current_page,
            'per_page'  => $config['per_page'],
            'page_link'   => $this->pagination->create_links(),
        );

        $this->load->view('admin/inc/header.php', $data);
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/news/list.php');
        $this->load->view('admin/inc/footer.php');

    }


    public function add_news() {


        //获取产品数据
        $this->load->model('admin/news_category_model', 'news_category');
        $data['news_category_list'] = $this->news_category->list_news_category();

        $this->load->view('admin/inc/header.php',$data);
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/news/add.php');
        $this->load->view('admin/inc/footer.php');

        if($this->input->post('submit')) {

            $news = array(
                'news_title' => $this->input->post('news_title'),
                'news_content'=> $this->input->post('news_content'),
                'news_category' => $this->input->post('news_category'),
                'news_poster' => $this->input->post('news_poster')
            );

            $res = $this->news->add_news($news);

            if($res) {
               header('Location: '.site_url('admin/news/list_news'));
            }

        }

    }

    public function remove_news() {

        $id = $this->uri->segment(4);
        $this->news->remove_news($id);
        header('Location: '.site_url('admin/news/list_news'));

    }


}