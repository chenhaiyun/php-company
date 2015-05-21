<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 12:19
 */

class News_category extends COM_Controller{

    public function __construct() {
        parent::__construct();

        $this->load->model('admin/news_category_model', 'news_category');
    }

    public function list_news_category() {

        $data['news_category_list'] = $this->news_category->list_news_category();

        $this->load->view('admin/inc/header.php', $data);
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/news_category/list.php');
        $this->load->view('admin/inc/footer.php');

    }

    public function remove_news_category() {

        $id = $this->uri->segment(4);

        $this->news_category->remove_news_category($id);

        header('Location: '.site_url('admin/news_category/list_news_category'));

    }

    public function add_news_category() {


        $this->load->view('admin/inc/header.php');
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/news_category/add.php');
        $this->load->view('admin/inc/footer.php');


        if($this->input->post('submit')) {



            $news_category = array(
                'category_name' => $this->input->post('category_name'),
                'category_desc' => $this->input->post('category_desc')
            );

            $res = $this->news_category->add_news_category($news_category);

            if($res) {
                header('Location: '.site_url('admin/news_category/list_news_category'));
            }


        }



    }

}