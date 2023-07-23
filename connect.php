<?php
//数据库连接文件
include 'config.php';
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_main,$db_port);
mysqli_query($mysqli,'set names utf8');
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
    exit(0);
}

?>