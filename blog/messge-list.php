<?php
include("conn.php"); //连接服务器
$sql = "SELECT * FROM blog  ORDER BY id DESC LIMIT 10";  
$query = mysql_query($sql);    
$rs = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>我的微博客主页</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
</head>
<body>
<a href="leave-message.php">添加内容</a> 
<hr color="#FF9900" size="3" />
<?php
if(!$rs){
    echo "没有相关内容！";
}    //判断是否有内容

while($rs){
?>
<h2>用户名：<?php echo $rs['name'];?>|标题：<?php echo $rs['title'];?>|<a href="message-detail.php?id=<?php echo $rs['id'];?>">查看</a>|<a href="message-delete.php?id=<?php echo $rs['id'];?>">删除</a></h2>
<li>日期：<?php echo $rs['date'];?></li>
<hr color="#0033FF" size="5" />
<?php
    $rs = mysql_fetch_array($query);
}   //打印内容
?>
</body>
</html> 