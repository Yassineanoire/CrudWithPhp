<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h1>add user</h1>
    <form action="" method="post">
        <input type="text" name="fnn" placeholder="enter ur name">
        <input type="text" name="lnn" placeholder="enter ur last-name">
        <input type="text" name="phone" placeholder="enter ur age">
        <input type="submit" name="submit4" id="">
    </form>
  
</body>

</html>
<?php
require('config.php');
if(isset($_POST['submit4'])){
$fname1=$_POST['fnn'];
$lname1=$_POST['lnn'];
$phone1=$_POST['phone'];
if(!empty($fname1) && !empty($lname1) && !empty($phone1)){
    $sql="INSERT INTO user (fn,ln,phone) VALUES ('$fname1','$lname1','$phone1')";
    $result=mysqli_query($conn,$sql);
    // $sql ="INSERT INTO user (fn, ln, phone) VALUES ('$fname1', '$lname1', '$phone1')";
    // $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('user is registred succefully')</script>";
        header("location:user.php");
    }
    else{
        echo "<script>alert('user is not registred succefully)</script>";
    }
}
else{
 echo "<script>alert('user is not registred succefully)</script>";
}
}
    ?>