<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 12:22
 */

class News_model extends CI_Model{

    public function list_news($offset, $per_page, $order_by) {

        $this->db->select('news.id, news_title, news_content, news_poster, news_date, news_category.category_name');
        $this->db->from('news');
        $this->db->join('news_category', 'news_category.id = news.news_category');
        $this->db->order_by($order_by);
        $this->db->limit($per_page, $offset);

        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            return array (
                'total' => $this->db->count_all('news'),
                'list' => $query->result(),
            );
        }
        return null;

    }

    public function get_news_by_id($id) {

        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id', $id);

        $query = $this->db->get();

        $row = $query->row();

        return $row;

    }

    public function remove_news($id) {

        $this->db->delete('news', array('id' => $id));

    }

    public function add_news($news) {

        $data = array(
            'news_title' => $news['news_title'],
            'news_content' => $news['news_content'],
            'news_category' => $news['news_category'],
            'news_poster' => $news['news_poster'],
            'news_date' => date('Y-m-d H:i:s',time())
        );

        $add_res = $this->db->insert('news', $data);

        return $add_res;

    }

    public function update_product($product) {

        $this->db->where('id', $product->id);
        $this->db->update('category', $product);

    }

}