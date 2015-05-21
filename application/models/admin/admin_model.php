<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 11:45
 */

class Admin_model  extends CI_Model {

    //管理员登录
    public function login($login_info) {

        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('login_name ', $login_info['login_name']);
        $this->db->where('password ', $login_info['password']);

        $query = $this->db->get();

        $row = $query->row();

        return $row;

    }

    public function list_admin() {

        $this->db->order_by('id','asc');
        $query = $this->db->get('admin');

        if($query->num_rows() > 0)
        {
            return $query->result();
        }

        return null;
    }


}