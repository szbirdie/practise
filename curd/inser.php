<?php

//连接数据库

$host = "localhost";

$username = "root";

$password = "123456";

$port = "3306";

$db = "sql";


// 连接数据库

$conn = @mysql_connect($host.":".$port, $username, $password) or die("connect mysql error");

// 选择数据库

mysql_select_db($db, $conn) or die("select db error");

mysql_query("SET NAMES utf8"); // 设置字符编码

$time = date("Y-m-d H:i:s");

$sql = "insert into test_user (name, tel, addr, qq, create_time) values ('吕清', '18092056648', 'suzhou', '510718587', '$time')";

mysql_query($sql, $conn);

echo mysql_insert_id();