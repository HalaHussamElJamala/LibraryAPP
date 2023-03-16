<?php
include('../include/conn.php');
if(isset($_GET['id'])){
   $sql="delete from user where id=".$_GET['id'];
   $res=mysqli_query($conn,$sql);
   header('location:usershow.php');

   }
?>