<?php

function status_select_all(){
    $sql = "SELECT * FROM status ";
    return pdo_query($sql);
}