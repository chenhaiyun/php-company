<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 12:19
 */

class Category extends COM_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function list_category() {

        $this->load->model('admin/category_model', 'category');

        $data['category_list'] = $this->category->list_category();

        $this->load->view('admin/inc/header.php', $data);
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/category/list.php');
        $this->load->view('admin/inc/footer.php');

    }

}