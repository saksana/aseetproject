<?php
require 'connect/connect.php';
 $id = $_POST["id"];
 $name = $_POST["name"];
 $department = $_POST["department"];
 $section = $_POST["section"];
 $username = $_POST["username"];
 $password = $_POST["password"];
$sql="update tbadmin set name='$name',department='$department',section='$section',username='$username',password='$password' where id ='$id'";
$result=mysqli_query($con,$sql);
if($result){
    header("location:admin.php");
    exit();
}else{
    echo mysqli_error($con);
}

?>