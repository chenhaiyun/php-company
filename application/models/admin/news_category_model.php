<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 12:22
 */

class News_category_model extends CI_Model{

    public function list_news_category() {

        $this->db->order_by('id','asc');
        $query = $this->db->get('news_category');

        if($query->num_rows() > 0)
        {
            return $query->result();
        }

        return null;

    }

    public function get_news_category_by_id($id) {

        $this->db->select('*');
        $this->db->from('news_category');
        $this->db->where('id', $id);

        $query = $this->db->get();

        $row = $query->row();

        return $row;

    }

    public function remove_news_category($id) {

        $this->db->delete('news_category', array('id' => $id));

    }

    public function add_news_category($category) {

        $data = array(
            'category_name' => $category['category_name'],
            'category_desc' => $category['category_desc']
        );

        $add_res = $this->db->insert('news_category', $data);

        return $add_res;

    }

    public function update_news_category($category) {

        $this->db->where('id', $category->id);
        $this->db->update('category', $category);

    }

}