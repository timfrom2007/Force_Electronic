<?php

include("mysql_connect.inc.php");

function show_user($id){
    //搜尋資料庫資料
    $sql = "SELECT * FROM `user` where `id` = '$id'";
    $result = mysql_query($sql);
    $row = @mysql_fetch_row($result);
    return $row;
}

function add_news($title, $date, $site){
    $safe_site = mysql_real_escape_string($site);
    $sql = "INSERT INTO `news`(`title`, `date`, `site`) VALUES ('$title','$date','$safe_site')";
    return $sql;
}

function show_news(){
    $sql = "SELECT * FROM `news` order by date DESC";
    $result = mysql_query($sql);
    return $result;
}

?>