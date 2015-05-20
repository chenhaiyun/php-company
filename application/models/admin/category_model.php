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
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }

        return null;

    }

    public function get_category_by_id($id) {

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('parent_id', $id);

        $query = $this->db->get();

        $row = $query->row();

        return $row;

    }

    public function add_category($category) {

        $data = array(
            'parent_id' => $category['parent_id'],
            'category_name' => $category['category_name'],
            'content' => $category['content'],
            'rank' => $category['rank']
        );

        $add_res = $this->db->insert('category', $data);

        return $add_res;

    }

}