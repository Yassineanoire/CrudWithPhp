<?php
require("config.php");
if(isset($_GET['email']) && isset($_GET['codeverification'])){
    $query="SELECT * From inscription where email='$_GET[email]' AND verificationcode='$_GET[codeverification]'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $result_fetch=mysqli_fetch_assoc($result);
        if($result_fetch['isverified']==0){
$update="UPDATE FROM inscription SET isverified=1 where  email='$_GET[email]' AND verificationcode='$_GET[codeverification]' ";
if(mysqli_query($conn,$update)){
    echo "<script>alert('account verified succesfully')</script>";
    header("location:index.php");
}
        }
    }
}
?>