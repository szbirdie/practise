<?php
       require "conn.inc.php";
       
       $id = intval($_GET['id']);
       if(!$id) {
           die("id error.");   
       }
       
       //删除语句
       $sql ="delete from test_user where id=($id)";

       mysql_query($sql);
       echo "影响的行数".mysql_affected_rows();

       //离开
       mysql_close();
