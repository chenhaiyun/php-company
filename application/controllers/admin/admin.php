<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 11:27
 */

class Admin extends COM_Controller {

    public function __construct() {
        parent::__construct();
    }


    //后台首页
    public function index() {

        $this->load->view('admin/inc/header.php');
        $this->load->view('admin/inc/top.php');
        $this->load->view('admin/inc/menus.php');
        $this->load->view('admin/index.php');
        $this->load->view('admin/inc/footer.php');

    }


    //后台退出登录
    public function logout() {

        $this->session->unset_userdata('admin_name');
        header('Location: '.$this->login_url);

    }

    //后台登录页面
    public function login() {


        $this->load->view('admin/inc/header.php');
        $this->load->view('admin/login.php');
        $this->load->view('admin/inc/footer.php');

        $submit = $this->input->post('submit');

        if($submit) {

            $login_name = $this->input->post('login_name');
            $password = $this->input->post('password');

            $login_info = array(
                "login_name" => $login_name,
                "password" => $password
            );

            $this->load->model('admin/admin_model', 'admin');

            $res = $this->admin->login($login_info);

            if($res != null) {

                //获取管理员信息并放入Session中
                $admin_name = $res->user_name;
                $this->session->set_userdata('admin_name', $admin_name);

                //登录成功进行跳转
                header('Location: '.$this->home_url);

            }

        }

    }


}