<?php


function comments_insert($content, $date,$rating, $user_id, $product_id){
    $sql = "INSERT INTO comments(content, date, rating, user_id, product_id) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $content, $date, $rating, $user_id, $product_id);
}

// function comments_update($comment_id, $content, $date, $user_id, $product_id){
//     $sql = "UPDATE comments SET content=?, date=?, user_id=?, product_id=? WHERE comment_id=?";
//     pdo_execute($sql, $content, $date, $user_id, $product_id, $comment_id);
// }

function comments_delete($comment_id){
    $sql = "DELETE FROM comments WHERE comment_id=?";
    if(is_array($comment_id)){
        foreach ($comment_id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $comment_id);
    }
}

function comments_select_all(){
    $sql = "SELECT * FROM comments bl ORDER BY date DESC";
    return pdo_query($sql);
}

function comments_select_by_id($comment_id){
    $sql = "SELECT * FROM comments WHERE comment_id=?";
    return pdo_query_one($sql, $comment_id);
}
function comments_select_byid($comment_id){
    $sql = "SELECT c.content, c.date, p.name ,u.ho_ten FROM comments b 
            join product p on p.product_id = c.product_id
            join user u on u.user_id = c.user_id
            WHERE comment_id=?";
    return pdo_query_one($sql, $comment_id);
}

function comments_exist($comment_id){
    $sql = "SELECT count(*) FROM comments WHERE comment_id=?";
    return pdo_query_value($sql, $comment_id) > 0;
}
//-------------------------------//
function comments_select_by_product($product_id){
    $sql = "SELECT c.*, user_name FROM comments c JOIN product p ON p.product_id=c.product_id
                                                JOIN  user u on u.user_id  = c.user_id
            WHERE c.product_id=? ORDER BY comment_id DESC ";
    return pdo_query($sql, $product_id);
}

function comments_select_page_product($product_id,$page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT c.*, user_name FROM comments c JOIN product p ON p.product_id=c.product_id
            JOIN  user u on u.user_id  = c.user_id
            WHERE c.product_id=? ORDER BY comment_id DESC
            limit $start, $quantity";
    return pdo_query($sql,$product_id);
}
function comments_select_by_product_admin(){
    $sql = "SELECT p.name,  p.product_id, COUNT(c.comment_id) AS comment_count, MIN(c.date) AS earliest_comment_date, MAX(c.date) AS lastest_comment_date 
            FROM comments c 
            JOIN product p ON p.product_id = c.product_id 
            JOIN user u ON u.user_id = c.user_id 
            GROUP BY p.name
            Order By  p.name desc";
    return pdo_query($sql);
}
function comments_select_page_by_product_admin($page, $quantity){
    $start = ($page -1)* $quantity;
    $sql = "SELECT p.name,  p.product_id, COUNT(c.comment_id) AS comment_count, MIN(c.date) AS earliest_comment_date, MAX(c.date) AS lastest_comment_date 
            FROM comments c 
            JOIN product p ON p.product_id = c.product_id 
            JOIN user u ON u.user_id = c.user_id 
            GROUP BY p.name
            Order By  p.name desc 
            Limit $start , $quantity";
    return pdo_query($sql);
}