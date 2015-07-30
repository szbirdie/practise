<?php
include("conn.php");   //连接数据库
if(!empty($_GET['id'])){
            mysql_query("delete from blog where id =".$_GET['id']);
} else {
        echo "参数引入失败！";
}    //删除相关内容
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>删除页面</title>
</head>
<body>
<a href="messge-list.php">返回主页面</a>
<hr color="#00FFFF" size="5px"/>
<h1>已经删除相关内容！</h1>
</body>
</html> 