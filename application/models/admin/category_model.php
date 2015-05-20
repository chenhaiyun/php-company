<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 12:22
 */

class Category_model extends CI_Model{

    public function list_category() {

        $query = $this->db->get('category');

        return $query->result();

    }

}