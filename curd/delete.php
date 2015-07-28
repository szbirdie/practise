<?php
require "conn.inc.php";
       //删除语句
       $sql ="delete from test_user where id=2";

       mysql_query($sql);


       //最后自动增长的ID
       echo mysql_insert_id(); 

       //离开
       mysql_close();