<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author wenbo-pc\wenbo
 */
class SampleModel {
    public function __construct() {
    	$this->db = Yaf_Registry::get('db');
    }   
    
    public function selectSample() {

    	$sql="select * from blog_user";
    	$data = $this->db->get_one($sql);
        return $data["id"];
    }

    public function insertSample($arrInfo) {
        return true;
    }
}
