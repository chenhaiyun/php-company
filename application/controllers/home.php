<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 10:21
 */

class Home extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    //前台首页
    public function index() {


        $this->load->view('front/inc/header');
        $this->load->view('front/index');
        $this->load->view('front/inc/footer');

    }

}