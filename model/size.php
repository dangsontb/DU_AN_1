<?php
   function size_select_all(){
    $sql = "SELECT * FROM size ";
    return pdo_query($sql);

}