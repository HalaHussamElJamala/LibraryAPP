<?php
include('../include/conn.php');
if(isset($_GET['id'])){
   $sql="delete from slipic where id=".$_GET['id'];
   $res=mysqli_query($conn,$sql);
   header('location:slipicshow.php');

   }
?>