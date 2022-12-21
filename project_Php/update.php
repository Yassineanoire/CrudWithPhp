
<?php
require('config.php');
$id =$_GET['updateid'];
$sql="SELECT * FROM user where id ={$id}";
$result=mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);
?>
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
    <h1>edit user</h1>
    <form action="" method="post">
        <input type="text" name="fnn" placeholder="enter ur first-name" value="<?php echo $row['fn'] ?>">
        <input type="text" name="lnn" placeholder="enter ur last-name" value="<?php echo  $row['ln'] ?>">
        <input type="text" name="phone" placeholder="enter ur phone number" value="<?php echo  $row['phone'] ?>">
        <input type="submit" name="submit5" id="" value="update">
    </form>
  
</body>

</html>
<?php
if(isset($_POST['submit5'])){
    $fname1=$_POST['fnn'];
    $lname1=$_POST['lnn'];
    $phone1=$_POST['phone'];
    if(!empty($fname1) && !empty($lname1) && !empty($phone1)){
        $sql="UPDATE user set fn='$fname1',ln='$lname1',phone='$phone1' where id = {$id}";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            echo "<script>alert('this user is updated succesfully')</script>";
        header("location:user.php");
    }
 
    }
}
        ?>

