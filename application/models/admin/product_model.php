<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 12:22
 */

class Product_model extends CI_Model{

    public function list_product() {

        $this->db->order_by('id','desc');
        $query = $this->db->get('product');

        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        return null;

    }

    public function get_product_by_id($id) {

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('id', $id);

        $query = $this->db->get();

        $row = $query->row();

        return $row;

    }

    public function remove_product($id) {

        $this->db->delete('product', array('id' => $id));

    }

    public function add_product($product) {

        $data = array(
            'product_name' => $product['product_name'],
            'product_category' => $product['product_category'],
            'product_image' => $product['product_image'],
            'product_desc' => $product['product_desc']
        );

        $add_res = $this->db->insert('product', $data);

        return $add_res;

    }

    public function update_product($product) {

        $this->db->where('id', $product->id);
        $this->db->update('category', $product);

    }

}