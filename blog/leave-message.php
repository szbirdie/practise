<?php
include("conn.php");   //连接数据库
if(!empty($_POST['submit'])){
    $name = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO blog VALUES(NUll,'$name','$title','$content',now())";
    mysql_query($sql);    
}     //写入数据
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>发布微博页面</title>
</head>
<body>
<a href="messge-list.php">查看内容</a>
<hr color="#0033CC" size="3px"/>
<form action="leave-message.php" method="post">
  用户名：<input type="text" name="name"/>  
  标题：<input type="text" name="title"/>
  <br />
  内容：
  <textarea rows="5" cols="50" name="content"></textarea>
  <br />
  <input type="submit" name="submit" value="提交"/>
  <br />
</form>
</body>
</html> 