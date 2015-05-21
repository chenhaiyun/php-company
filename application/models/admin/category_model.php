<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 12:22
 */

class Category_model extends CI_Model{

    public function list_category() {

        $this->db->order_by('path','asc');
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
        $this->db->where('id', $id);

        $query = $this->db->get();

        $row = $query->row();

        return $row;

    }

    public function remove_category($id) {

        $this->db->delete('category', array('id' => $id));

    }

    public function add_category($category) {

        $data = array(
            'parent_id' => $category['parent_id'],
            'category_name' => $category['category_name'],
            'content' => $category['content'],
            'path' => $category['path'],
            'rank' => $category['rank']
        );

        $add_res = $this->db->insert('category', $data);
        $new_id = $this->db->insert_id();

        $new_category = $this->get_category_by_id($new_id);

        if($category['parent_id'] > 0) {

            $new_category->path = $category['path'].",".$new_id;
            $this->update_category($new_category);

        } else {

            $new_category->path = $new_id;
            $this->update_category($new_category);

        }

        return $add_res;

    }

    public function update_category($category) {

        $this->db->where('id', $category->id);
        $this->db->update('category', $category);

    }

}