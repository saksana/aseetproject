<?php
require 'connect/connect.php';
$id = $_GET["id"];
$sql="delete from tbadmin where id = '$id'";
$result = mysqli_query($con,$sql);
if($result){
    header("location:admin.php");
    exit();
}else{
    echo mysqli_error($con);
}
?>