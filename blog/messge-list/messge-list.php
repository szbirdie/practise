<?php
$page=isset($_GET['page'])?intval($_GET['page']):1;    //设置page值
 
$num=3;    //设置显示行数
   
include("conn.php"); //连接服务器

$total=mysql_num_rows(mysql_query("select * from blog")); //查询数据的总数 
$pagenum=ceil($total/$num);                                    //获得总页数 

$offset=($page-1)*$num;  

$sql = "SELECT * FROM blog  ORDER BY id DESC LIMIT $offset,$num";  

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
For($i=1;$i<=$pagenum;$i++){ 

       $show=($i!=$page)?"<a href='messge-list.php?page=".$i."'>$i</a>":"<b>$i</b>"; 
       Echo $show." "; 
}           //设置分页按钮
?>
</body>
</html> 