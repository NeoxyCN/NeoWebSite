<?php

include '../config.php';
$mysqli=new mysqli($db_host,$db_user,$db_psw);
mysqli_query($mysqli,'set names utf8');
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
    exit(0);
}
//创建数据库
$sql = "CREATE DATABASE $db_main";
if ($mysqli->query($sql) === TRUE) {
    echo "数据库创建成功</p>";
} else {
    echo "数据库创建失败: " . $mysqli->error."</p>";
    return 0;
}
mysqli_select_db($mysqli,$db_main);
$sql = "CREATE TABLE $db_userdb (id VARCHAR(30), name VARCHAR(30),password VARCHAR(30),power VARCHAR(30),coin VARCHAR(30),date VARCHAR(30))";

if ($mysqli->query($sql) === TRUE) {
    echo "创建用户数据表成功.</p>";
} else {
    echo "创建用户数据表错误: " . $mysqli->error."</p>";
    return 0;
}
mysqli_select_db($mysqli,$db_main);
$sql = "CREATE TABLE $db_forumdb (id VARCHAR(30),type VARCHAR (30),tile VARCHAR(30),text VARCHAR(30),author VARCHAR(30),date VARCHAR(30),repeat VARCHAR(30))";
if ($mysqli->query($sql) === TRUE) {
    echo "创建论坛数据表成功.</p>";
} else {
    echo "创建论坛数据表错误: " . $mysqli->error."</p>";
    return 0;
}
mysqli_select_db($mysqli,$db_main);
$sql = "CREATE TABLE $db_forumdb (id VARCHAR(30), name VARCHAR(30),text VARCHAR(30),admin VARCHAR(30),hotest VARCHAR(30),repeatDate VARCHAR(30),repeatText VARCHAR(30))";
if ($mysqli->query($sql) === TRUE) {
    echo "创建论坛板块数据表成功.</p>";
} else {
    echo "创建论坛板块数据表错误: " . $mysqli->error."</p>";
    return 0;
}
echo "安装任务:3 成功:3 失败:0 跳过:0</p>";
echo "Neoxy WebSite安装完成</p>";
?>