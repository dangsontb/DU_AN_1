<?php
function list_user(){
    $list_user = user_select_all();
    include "user/list_user.php";

}
function add_user(){
    if(isset($_POST['themmoi']) && $_POST['themmoi']){
        $name       = $_POST['name'];
        $pass       = $_POST['pass'];
        $fullname   = $_POST['fullname'];
        $email      = $_POST['email'];
        $tel        = $_POST['tel'];
        $address    = $_POST['address'];       
        $role      = $_POST['roles'];
        $create_at  = date('d-m-y');
        $error = [];
        if(!empty($name)){
            $user_select_name = user_select_by_name($name);
            if(is_array($user_select_name)){
                $error['user_name'] = "Tên tài khoản đã tồn tại";
            }
            if(strlen($name) < 8 ) { $error['user_name']= "Tên tài khoản phải từ 8 ký tự trở lên";}
        }else{
             $error['user_name'] = "Nhập tên tài khoản !";
        }

        if(!empty($pass)){
            if(strlen($pass) < 8 ) { $error['pass']= "Mật khẩu phải từ 8 ký tự trở lên";}
        }else{
            $error['pass'] ="Nhập mật khẩu !";
        } 

        if(empty($fullname)){
            $error['fullname'] ="Nhập họ và tên !";
        }

        if(!empty($email)){
            $user_select_email = user_select_by_email($email);
            if(is_array($user_select_email)){
                $error['email'] = "Địa chỉ email đã tồn tại";
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] ="Nhập đúng định dạng email !";
            }
        }else{
            $error['email'] ="Nhập đia chỉ email !";
        }

        if(!empty($tel)){
            if(!is_numeric($tel)){
                $error['tel'] ="Nhập số điện thoại phải là 10 số   !";
            }
            if(strlen($tel) != 10){
                $error['tel'] ="Nhập số điện thoại phải là 10 số   !";
            }
        }else{
            $error['tel'] ="Nhập số điện thoại !";
        }

        if(empty($address)){
            $error['address'] ="Nhập địa chỉ !";
        }

        if(empty($error)){
            user_insert($name, $pass, $fullname, $email, $tel, $address, $role, $create_at );
            header("location: index.php?act=list_user");
        }
    }
    include "user/add_user.php";
}
function delete_user(){
    if(isset($_GET['user_id']) &&  ($_GET['user_id']) > 0){
        $user_id = $_GET['user_id'] ;
        user_delete($user_id);
    } 
    $list_user = user_select_all();
    include "user/list_user.php";
}
function delete_user_by_checkbox(){
    if(isset($_POST['delete_btn']) ){
        if(isset($_POST['users_id'])){
            $user_id = $_POST['users_id'];
            if(!empty($user_id)){
                user_delete($user_id);
            }
        }
    } 
    $list_user = user_select_all();
    include "user/list_user.php";
}

function edit_user(){
    if(isset($_GET['user_id']) &&  ($_GET['user_id']) > 0){
        $user_id = $_GET['user_id'] ;
        $user_update = user_select_by_id($user_id);
    } 
    
    include "user/update_user.php";
}
function update_user(){
    if(isset($_POST['capnhat']) && $_POST['capnhat']){
        $name       = $_POST['name'];
        $pass       = $_POST['pass'];
        $fullname   = $_POST['fullname'];
        $email      = $_POST['email'];
        $tel        = $_POST['tel'];
        $address    = $_POST['address'];       
        $role      = $_POST['roles'];
        $create_at  = date('d-m-y');
        $error = [];
        $user_id = $_POST['user_id'];
        $user_name_old = $_POST['user_name_old'];
        $user_email_old = $_POST['user_email_old'];
        
        if(!empty($name)){
        if($name !=  $user_name_old){
            $user_select_name = user_select_by_name($name);
            if(is_array($user_select_name)){
                $error['user_name'] = "Tên tài khoản đã tồn tại";
            }
        }
            if(strlen($name) < 8 ) { $error['user_name']= "Tên tài khoản phải từ 8 ký tự trở lên";}
        }else{
             $error['user_name'] = "Nhập tên tài khoản !";
        }

        if(!empty($pass)){
            if(strlen($pass) < 8 ) { $error['pass']= "Mật khẩu phải từ 8 ký tự trở lên";}
        }else{
            $error['pass'] ="Nhập mật khẩu !";
        } 

        if(empty($fullname)){
            $error['fullname'] ="Nhập họ và tên !";
        }

        if(!empty($email)){
            if($email !=  $user_email_old){
                $user_select_email = user_select_by_email($email);
                if(is_array($user_select_email)){
                    $error['email'] = "Địa chỉ email đã tồn tại";
                }
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] ="Nhập đúng định dạng email !";
            }
        }else{
            $error['email'] ="Nhập đia chỉ email !";
        }

        if(!empty($tel)){
            if(!is_numeric($tel)){
                $error['tel'] ="Nhập số điện thoại phải là 10 số   !";
            }
            if(strlen($tel) != 10){
                $error['tel'] ="Nhập số điện thoại phải là 10 số   !";
            }
        }else{
            $error['tel'] ="Nhập số điện thoại !";
        }

        if(empty($address)){
            $error['address'] ="Nhập địa chỉ !";
        }

        if(empty($error)){
            user_update($user_id, $name, $pass, $fullname, $email, $tel, $address, $role, $create_at );
        }
    }
    $list_user = user_select_all();
    include "user/list_user.php";
}