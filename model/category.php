<?php
// select
    function category_select_all(){
        $sql = "SELECT * FROM categories order by cate_id";
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
    function category_select_page($page , $quantity){
        $start = ($page -1) * $quantity ; 
        $sql = "SELECT * FROM categories order by cate_id limit $start , $quantity";
        return pdo_query($sql);
    } 
    function category_number_pages($list_cate , $quantity){
        $total_cate = count($list_cate);
        return ceil($total_cate/$quantity);
    } 
// insert
    function category_insert($cate_name){
        $sql = "INSERT into categories(cate_name) value (?) ";
        pdo_execute($sql,$cate_name); 
    }

//update
    function category_update($cate_id,$cate_name){
        $sql = "UPDATE categories set cate_name = ? where cate_id =?";
        pdo_execute($sql,$cate_name,$cate_id);
    }

//delete
    function category_delete($cate_id){
        if(is_array($cate_id)){
            foreach($cate_id as $id){
                $sql = "DELETE  FROM categories WHERE cate_id=".$id;
                pdo_execute($sql);
            }
        }else{
            $sql = "DELETE  FROM categories WHERE cate_id=".$cate_id;
            pdo_execute($sql);
        }
    }
    
?>