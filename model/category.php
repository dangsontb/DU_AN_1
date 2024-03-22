<?php
    function category_select_all(){
        $sql = "SELECT * FROM categories";
        return pdo_query($sql);
    }
    function category_select_name($cate_name){
        $sql = "SELECT * from categories where cate_name = ?";
        return pdo_query_one($sql,$cate_name);
    }
    function category_select_by_id($cate_id){
        $sql = "SELECT * from categories where cate_id = ?";
        return pdo_query_one($sql,$cate_id);
    }
    function category_insert($cate_name){
        $sql = "INSERT into categories(cate_name) value (?) ";
        pdo_execute($sql,$cate_name); 
    }
    function category_update($cate_id,$cate_name){
        $sql = "UPDATE categories set cate_name = ? where cate_id =?";
        pdo_execute($sql,$cate_name,$cate_id);
    }
    function delete_category($cate_id){
        $sql = "DELETE  FROM categories WHERE cate_id=".$cate_id;
        pdo_execute($sql);
    }
?>