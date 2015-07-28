<?php
require "conn.inc.php";
       //修改语句
       $sql ="update test_user set name='123hu',tel='12345654321',qq='1234567' where id='1'";
        mysql_query($sql);


       //最后自动增长的ID
       echo mysql_insert_id(); 

       //离开
       mysql_close();