<?php
include('../include/header.php');
include('../include/conn.php');

if(isset($_GET['id'])){
    $sql="select file_book from books where id=".$_GET['id'];
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($res)){
    echo 
    "<embed style='background-color:black; color:black;' src='../files/$row[file_book]' width='100%' height='675px' />";
   }}
?>