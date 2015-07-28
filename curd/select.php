<?php
require "conn.inc.php";
       //查询语句
      $sel="select * from test_user";
      $result=mysql_query($sel);
      $data=mysql_fetch_assoc($result);
      print_r($data);
      echo '<br>';     
   
       //最后自动增长的ID
       echo mysql_insert_id(); 
       //离开
       mysql_close();