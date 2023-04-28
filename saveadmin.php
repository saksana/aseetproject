<?php
require 'connect/connect.php';
 $id = $_POST["id"];
 $name = $_POST["name"];
 $department = $_POST["department"];
 $section = $_POST["section"];
 $username = $_POST["username"];
 $password = $_POST["password"];
$sql="insert into tbadmin values('$id','$name','$department','$section','$username','$password')";
$result=mysqli_query($con,$sql);
if($result){
    echo "ok";
}else{
    echo mysqli_error($con);
}

?>