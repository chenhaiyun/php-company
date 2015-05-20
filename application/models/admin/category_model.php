<?php
/**
 * Created by PhpStorm.
 * User: magicchen
 * Date: 2015/5/20
 * Time: 12:22
 */

class Category_model extends CI_Model{

    public function list_category($id) {

        //$query = $this->db->get('category');

        //$data = $this->db->get('category');

        $this->get_str();

        //return $query->result();

    }


    function get_str($id = 0) {
        global $str;

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('parent_id', $id);

        $result = $this->db->get();

        //$sql = "select id,category_name from com_category where parent_id=". $id;
        //$result = $this->db->query($sql);//查询pid的子类的分类

        if($result){//如果有子类
            $str .= '<ul>';
            while ($row = $result->result_array()) { //循环记录集
                $str .= "<li>" . $row['id'] . "--" . $row['category_name'] . "</li>"; //构建字符串
                $this->get_str($row['id']); //调用get_str()，将记录集中的id参数传入函数中，继续查询下级
            }
            $str .= '</ul>';
        }
        return $str;
    }

}