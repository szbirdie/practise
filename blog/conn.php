<?php
$conn = @mysql_connect("localhost:3306","root","123456") or die("连接数据库服务器失败！");//连接MySql数据库服务
@mysql_select_db("test",$conn) or die("未能连接到数据库！");//连接ly_php_base数据库
mysql_query("SET NAMES 'UTF8'");  //设置编码
?>  