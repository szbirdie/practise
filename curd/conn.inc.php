<?php
	//连接数据库
	$link=mysql_connect("localhost", "root", "123456") or die("connect mysql error");

        //选择库
        mysql_select_db("sql", $link) or die("select db error");


        mysql_query("SET NAMES utf8"); // 设置字符编码


	
