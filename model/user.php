<?php

function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
function user_select_by_id($id){
    $sql = "SELECT * FROM user where user_id = ?";
    return pdo_query_one($sql,$id);
}
function user_select_by_name($user_name){
    $sql = "SELECT * FROM user where user_name = ?";
    return pdo_query_one($sql,$user_name);
}
function user_select_by_email($email){
    $sql = "SELECT * FROM user where email = ?";
    return pdo_query_one($sql,$email);
}
function user_select_forgot_password($email,$user_name){
    $sql = "SELECT * FROM user where email = ? and user_name = ?";
    return pdo_query_one($sql,$email, $user_name);
}
function user_insert( $user_name, $password, $fullname, $email, $phone, $address, $role, $create_at ){
    $sql = "INSERT INTO user(user_name, password, fullname, email, phone, address, role, create_at) values(?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $user_name, $password, $fullname, $email, $phone, $address, $role, $create_at );
}
function customer_insert( $user_name, $password, $fullname, $email, $phone, $address,  $create_at ){
    $sql = "INSERT INTO user(user_name, password, fullname, email, phone, address,  create_at) values(?,?,?,?,?,?,?)";
    pdo_execute($sql, $user_name, $password, $fullname, $email, $phone, $address,  $create_at );
}
function user_update($user_id, $user_name, $password, $fullname, $email, $phone, $address, $role, $create_at ){
    $sql = "UPDATE user SET user_name=?,password=?,fullname=?,email=?,phone=?,address=?,role=?,create_at=? WHERE user_id =?";
        pdo_execute($sql, $user_name, $password, $fullname, $email, $phone, $address, $role, $create_at, $user_id);
}

function user_delete($user_id){
    if(is_array($user_id)){
        foreach ($user_id as $id) {
            $sql = "DELETE FROM user WHERE user_id = ?";
            pdo_execute($sql, $id);
        }  
    }else  {
        $sql = "DELETE FROM user WHERE user_id = ?";
        pdo_execute($sql, $user_id);
    } 
}
function user_select_login($user_name,$password){
    $sql = "SELECT * FROM user where user_name = ? and password = ?";
    return pdo_query_one($sql,$user_name,$password);
}