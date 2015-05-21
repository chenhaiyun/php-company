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

        $this->load->model('admin/category_model', 'category');
    }

    public function list_category() {

        $data['category_list'] = $this->category->list_category();

        $this->load->view('admin/inc/header.php', $data);
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/category/list.php');
        $this->load->view('admin/inc/footer.php');

    }

    public function remove_category() {

        $id = $this->uri->segment(4);


        $this->category->remove_category($id);

        header('Location: '.site_url('admin/category/list_category'));

    }

    public function add_category() {

        $data['category_list'] = $this->category->list_category();

        $this->load->view('admin/inc/header.php', $data);
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/category/add.php');
        $this->load->view('admin/inc/footer.php');


        if($this->input->post('submit')) {

            $parent_id = $this->input->post('parent_id');

            if($parent_id > 0) {

                $parent_cat = $this->category->get_category_by_id($parent_id);

                $category = array(
                    'parent_id' => $parent_id,
                    'category_name' => $this->input->post('category_name'),
                    'content' => $this->input->post('content'),
                    'path' => $parent_cat->path,
                    'rank' => $parent_cat->rank + 1
                );

            } else {
                $category = array(
                    'parent_id' => 0,
                    'category_name' => $this->input->post('category_name'),
                    'content' => $this->input->post('content'),
                    'rank' => 1
                );
            }

            //var_dump($admin_user);
            $res = $this->category->add_category($category);

            if($res) {
                header('Location: '.site_url('admin/category/list_category'));
            }


        }



    }

}