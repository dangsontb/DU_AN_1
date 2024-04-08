<?php

function minus_quantity(){
    if(isset($_GET['id']) && isset($_GET['i'])){
        $id=$_GET['id'];
        $i = $_GET['i'];
        foreach($_SESSION['giohang'] as $sp){
            if($sp[0] ==$id){
                if($_SESSION['giohang'][$i][4]>1){
                    $_SESSION['giohang'][$i][4]--;
                }else{
                    array_splice($_SESSION['giohang'],$i,1);
                }
            }
        }
    }
    header('location: index.php?act=viewcart');
}
function plus_quantity(){
    if(isset($_GET['id']) && isset($_GET['i'])){
        $id=$_GET['id'];
        $i = $_GET['i'];
        foreach($_SESSION['giohang'] as $sp){
            if($sp[0] ==$id){
                $_SESSION['giohang'][$i][4]++;
                echo $_SESSION['giohang'][$i][4];
            }
        }
    }
    header('location: index.php?act=viewcart');
}