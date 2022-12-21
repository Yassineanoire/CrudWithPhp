<?php
require('config.php');
$sql="DELETE from user where id = {$_GET['deleteid']}";

$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('this user tm7a binaja7')</script>";
    header("location:user.php");
}
else{
    echo "<script>alert('this user matm7ach binajah')</script>";
}
?>