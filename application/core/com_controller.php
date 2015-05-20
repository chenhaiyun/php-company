<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 11:26
 */

class COM_Controller extends CI_Controller{

    public function __construct() {
        parent::__construct();


        //定义一些全局变量
        $this->home_url = site_url("admin/admin/index");
        $this->login_url = site_url("admin/admin/login");

        //验证用户登录

        //当为注册页面时，退出执行以下语句
        //if($this->router->fetch_method() != 'add_admin') {

            //判断用户是否登录，否则跳转到登录页面
            $admin_name = $this->session->userdata('admin_name');

            //当前页面不是登录页面且Session无值时，跳转到登录页面
            if(!$admin_name && $this->router->fetch_method() != 'login') {
                header('Location: '.$this->login_url);
            }
            //当前页面是登录页面且Session有值时，跳转到管理首页面
            else if($admin_name && $this->router->fetch_method() == 'login') {
                header('Location: '.$this->home_url);
            }


        //}


    }

}