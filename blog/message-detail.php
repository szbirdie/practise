<?php
    include("conn.php");
    $sql = "SELECT * FROM blog WHERE id = ".$_GET['id'];
    $rc = mysql_fetch_array(mysql_query($sql));
?>  

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>具体内容</title>
</head>
<body>
<a href="messge-list.php">返回主页面</a>
<hr color="#00FFFF" size="5px"/>
<h2>标题：<?php echo $rc['title'];?>
  <hr color="#006699" size="3px">
</h2>
<p>内容：<?php echo $rc['content'];?></p>
<li>用户名：<?php echo $rc['name'];?>|<?php echo "日期：".$rc['date'];?></li>
</body>
</html> 